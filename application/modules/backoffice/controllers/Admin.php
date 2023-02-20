<?php
require_once(APPPATH."third_party/PHPMailer_5.2.0/class.phpmailer.php");
class Admin extends MX_Controller {

 	public $client;
 	private $data = array();
    function __construct() {
        parent::__construct();
        $this->load->model('backoffice/Adminmodel');
		$this->load->helper('text');
        $this->load->helper('url');
    }
	
    function index($msg=NULL) {
        $data['page_title'] = 'Worqleus Backoffice';
        $data['msg'] = $msg;
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Admin/login');
    }

    function checkaccess(){ 
        $auth= $this->session->userdata('token');
        $user_id = $this->session->userdata('admin_id'); 
        $authsql = "SELECT admin_id FROM w_admin_auth WHERE auth_token = ? and admin_id = ?";
        $authquerycheck = $this->db->query($authsql,[$auth,$user_id]);
        $authArr = $authquerycheck->result_array();
        if(empty($authArr)){
           header('location: '.BASEURL.'/backoffice/Admin');
        }else{
           return true;
        }
    }
	
    //User Login Process
    public function login(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        if(!empty($email) && !empty($password)){
            $checkemail = $this->common->checkrecord('w_admin', 'email', $email);
            if(true === $checkemail){
                $rows=$this->Adminmodel->login($email,$password);
                if($rows === false){
                    $msg="Invalid Password";
                    $this->index($msg);
                }else{
                    $userdata = [
                        'admin_id' => $rows['admin_id'],
                        'fullname' => $rows['fullname'],
                        'email' => $rows['email'],
                        'adminlogin'=>'true',
                        'token' => $rows['token']
                        ];
                    $this->session->set_userdata($userdata);
                    header('location: '.BASEURL.'/backoffice/Admin/dashboard/');
                }
            }else{
                $msg="Invalid Email";
                $this->index($msg);
            }
        }else{
            header('location: '.BASEURL.'/backoffice/Admin');
        }
    }	

    //Edit Admin 
    public function editProfile($msg = NULL){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){ 
            $data['page_title'] = 'Edit Profile';    
            $data['userArr']=$this->Adminmodel->adminprofile();      
            $data['msg'] = $msg;
            $this->load->view('backoffice/Common/header',$data);
            $this->load->view('backoffice/Common/sidebar');
            $this->load->view('backoffice/Admin/editProfile',$data);
            $this->load->view('backoffice/Common/footer');
        }else{
            header('location: '.BASEURL.'/backoffice/Admin');
        }
    }

    //Admin Profile Update 
    public function update_profiledata(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){ 
            $result=$this->Adminmodel->update_admindata();   
            if($result === true){
                $msg="Updated Successfully";
                $this->editProfile($msg);
            } 
        }else{
            header('location: '.BASEURL.'/backoffice/Admin');
        }     
    }
	
	//User Logout Process
    public function do_logout(){
        $this->session->sess_destroy();
		header('location: '.BASEURL.'/backoffice/Admin');

    }	
	
	public function dashboard(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){    
            $data['page_title'] = 'Dashboard';
            $this->load->view('backoffice/Common/header',$data);
            $this->load->view('backoffice/Common/sidebar');
            $this->load->view('backoffice/Admin/dashboard',$data);
            $this->load->view('backoffice/Common/footer');
        }else{
            header('location: '.BASEURL.'/backoffice/Admin');
        }
    }


    public function check_email_exists(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true"){
        $user_id = $this->session->userdata('admin_id');
        $email = $this->security->xss_clean($this->input->post('email')); 
        $checkuser = $this->common->checkrecordid('w_admin', 'email', $email, 'admin_id', $user_id);
        if(true === $checkuser){ echo 1; die; }else{
            $checkemail = $this->common->checkrecord('w_admin', 'email', $email);
            if(false === $checkemail){
                echo 1; die;
            }else{
                echo 2; die;
            }
        }
        }else{
            header('location: '.BASEURL.'/backoffice/user');
        }
    }

    public function changepassword(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true"){
            $oldpassword = $this->security->xss_clean($this->input->post('oldpwd'));
            $newpassword = $this->security->xss_clean($this->input->post('newpwd'));
            $result=$this->Adminmodel->change_password($oldpassword,$newpassword);     
        }else{
            header('location: '.BASEURL.'/backoffice/user');
        }      
    }

    public function forgotpassword(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkEmail = $this->common->checkrecord('ic_admin', 'email', $email);
        if(true === $checkEmail){
            $strpassword = $this->common->generateRandomString();
            $subject = "Password recovery email.";
            $message = '<p>Greetings,<br>Your New Password: <strong>'.$strpassword.'</strong><br>Please login with given password and update your profile<br>Thanks<br> YIP Team';
            $body =
                    '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
                        <title>'.html_escape($subject).'</title>
                        <style type="text/css">
                            body {
                                font-family: Arial, Verdana, Helvetica, sans-serif;
                                font-size: 16px;
                            }
                        </style>
                    </head>
                    <body>
                    '.$message.'
                    </body>
                    </html>';
            $result = $this->Adminmodel->updateNewPassword($strpassword,$email);
            if(false === $result ){
                echo 3; die;
            }
            else{ 
            $this->load->library('email');
            $mailresult = $this->email
                    ->from('info@worqleus.com')
                    ->to($email)
                    ->subject($subject)
                    ->message($body)
                    ->send();
            echo 1; die;
           }            
        }else{echo 2; die;}
    }


}