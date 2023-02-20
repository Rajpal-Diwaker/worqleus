<?php
class User extends MX_Controller {

 public $client;
    function __construct() {
        parent::__construct();
        $this->load->model('Usermodel');
		$this->load->helper('form');
    }
	//User Sign in page
    function signin($msg=NULL) {
        $login=$this->session->userdata('login');
        if($login=='true'){
            header('location: '.BASEURL);
        }else{
            $data['msg'] = $msg;
            $data['page_title'] = 'Sign In';
            $this->load->view('website/signin',$data);
        }
    }
    //User Sign Up Page
    function signup() {
        $login=$this->session->userdata('login');
        if($login=='true'){
            header('location: '.BASEURL);
        }else{
            $data['page_title'] = 'Register';
            $this->load->view('website/signup');
        }
    }
    //Forgot Password
    function forgot_password($msg=NULL) {
        $data['msg'] = $msg;
        $data['page_title'] = 'Sign In';
        $this->load->view('website/forgot',$data);
    }
    function forgotprocess(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkemail = $this->common->checkRecord('w_user', 'user_email', $email);
        if(true === $checkemail){
            $result = $this->Usermodel->forgotprocess($email);
            if($result === false){
                $msg="Please try again.Something went wrong";
                $this->forgot_password($msg);
            }else{
                $pin = urlencode(base64_encode($result['pin']));
                $email = $result['email'];
                $subject = "Password recovery email.";
                $image_URL = WEB.'/images/logo.png';
                $url = BASEURL.'/reset-password/'.$pin;
                $bodytext = '<p>Greetings,<br>Please click on given link to reset your password: <a href="'.$url.'" style="background-color:#ef822c;color:#fff;">Reset Password</a><br><br>Thanks<br> Worqleus Team';
                $body = '<!doctype html>
                            <html>
                            <head>
                            <meta charset="utf-8">
                            <title>My Follow Up</title>
                            </head>
                            <body>
                            <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center"><img src="'.$image_URL.'" width="260" height="77" alt="" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td style="font-size:15px; font-family:Arial, Helvetica, sans-serif; line-height:24px;">'.$bodytext.'</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td bgcolor="#000" style="font-size:15px; font-family:Arial, Helvetica, sans-serif; padding:15px; text-align:center; color:#fff;">© WorQleus©All Rights Reserved 2019</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                            </table>

                            </body>
                            </html>
                        ';
                $this->load->library('email');
                $mailresult = $this->email
                        ->from('info@worqleus.com')
                        ->to($email)
                        ->subject($subject)
                        ->message($body)
                        ->send();
                $msg="Please Check your Email.";
                $this->forgot_password($msg);
            }  
        }else{
            header('location: '.BASEURL.'/forgot_password');
        }
    }
    //Rest Password
    function reset_password($msg=NULL) {
        $data['msg'] = $msg;
        $data['page_title'] = 'Reset Password';
        $id = $this->uri->segment(2);
        $userid = base64_decode(urldecode($id));
        $checkPin = $this->common->checkRecord('w_user', 'forgot_password', $userid);
        if(true === $checkPin){
            $data['resultArr']=$this->Usermodel->reset_password($userid);
        }else{
            $data['resultArr'] = 'Expired';
        }
        $this->load->view('website/resetpassword',$data);
    }
    function resetpasprocess(){
        $password = $this->security->xss_clean($this->input->post('password'));
        $userid = $this->security->xss_clean($this->input->post('user_id'));
        $user_id = base64_decode(urldecode($userid));
        $checkuserId = $this->common->checkRecord('w_user', 'user_id', $user_id);
        if(true === $checkuserId){
            $result = $this->Usermodel->resetpasprocess($password,$user_id);
            if($result ===true){
                header('location: '.BASEURL.'/signin');
            }else{
                $msg="Something went wrong please try again";
                $this->reset_password($msg);
            }
        }else{
            $msg="Something went wrong please try again";
            $this->reset_password($msg);
        }
    }
    function check_email_notexists(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkemail = $this->common->checkRecord('w_user', 'user_email', $email);
        if(false === $checkemail){
            echo 1; die;
        }else{
            echo 2; die;
        }
    }
    function check_email_exists(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkemail = $this->common->checkRecord('w_user', 'user_email', $email);
        if(true === $checkemail){
            echo 1; die;
        }else{
            echo 2; die;
        }
    }
    //User Sign up process
    function signupprocess(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkemail = $this->common->checkRecord('w_user', 'user_email', $email);
        if(false === $checkemail){
            $result = $this->Usermodel->signupprocess();
            $userdata = [
                'user_id' => $result['user_id'],
                'user_first_name' => $result['user_first_name'],
                'login'=>'true',
                'user_last_name' => $result['user_last_name'],
                'user_email' => $result['user_email'],
                'user_type' => 'user'
                ];
            $this->session->set_userdata($userdata);
            header('location: '.BASEURL);
        }else{
            header('location: '.BASEURL.'/signup');
        }
    }
    //User Sign in process
    function signinprocess(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $checkemail = $this->common->checkRecord('w_user', 'user_email', $email);
        if(true === $checkemail){
            $result = $this->Usermodel->signinprocess($email,$password);
            if($result === false){
                $msg="Invalid Password";
                $this->signin($msg);
            }else{
                $userdata = [
                'user_id' => $result['user_id'],
                'user_first_name' => $result['user_first_name'],
                'login'=>'true',
                'user_last_name' => $result['user_last_name'],
                'user_email' => $result['user_email'],
                'user_type' => 'user'
                ];
            //    print_r($userdata); die;
                $this->session->set_userdata($userdata);
                header('location: '.BASEURL);
            }            
        }else{
            header('location: '.BASEURL.'/signin');
        }
    }

    function sign_out(){
        $this->session->sess_destroy();
        header('location: '.BASEURL);
    }   

}