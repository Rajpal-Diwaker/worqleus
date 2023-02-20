<?php
require_once(APPPATH."third_party/PHPMailer_5.2.0/class.phpmailer.php");
class User extends MX_Controller {

 	public $client;
 	private $data = array();
    function __construct() {
        parent::__construct();
        $this->load->model('backoffice/Usermodel');
		$this->load->helper('text');
        $this->load->library('pagination');
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()!=true){
            header('location: '.BASEURL.'/backoffice/Admin');
        }
    }
    //Check Authentication
    function checkaccess(){ 
        $auth= $this->session->userdata('token');
        $user_id = $this->session->userdata('admin_id'); 
        $authsql = "SELECT admin_id FROM w_admin_auth WHERE auth_token = ? and admin_id = ?";
        $authquerycheck = $this->db->query($authsql,[$auth,$user_id]);
        $authArr = $authquerycheck->result_array();
        if(empty($authArr)){
           header('location: '.BASEURL.'/backoffice/user');
        }else{
           return true;
        }
    }

    //Website User Listing
    function user_management(){
        $data['page_title'] = 'User Management';
        $config['base_url'] = base_url('backoffice/Content/user_management');
        
        $config['per_page'] = ($this->input->get('limitRows')) ? $this->input->get('limitRows') : 10;
        $config['enable_query_strings'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;
         // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
       
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="'.$config['base_url'].'?per_page=0">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $data['page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $data['searchFor'] = ($this->input->get('query')) ? $this->input->get('query') : NULL;
        $data['orderField'] = ($this->input->get('orderField')) ? $this->input->get('orderField') : '';
        $data['orderDirection'] = ($this->input->get('orderDirection')) ? $this->input->get('orderDirection') : '';
        $data['postlist'] = $this->Usermodel->user_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $config['total_rows'] = $this->Usermodel->count_user_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/User/user_management',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //View User Detail
    function viewUser(){
        $id = $this->uri->segment(4);
        $data['page_title'] = 'User Detail';
        $userid = base64_decode(urldecode($id));
        $data['userArr']=$this->Usermodel->userDetail($userid);  
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/User/viewUser',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Change User status 
    function changeuserStatus(){
        $result = $this->Usermodel->changeuserStatus();  
    }
	

}