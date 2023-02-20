<?php
require_once(APPPATH."third_party/PHPMailer_5.2.0/class.phpmailer.php");
//Content controller to manage website page and post content
class Content extends MX_Controller {

 	public $client;
 	private $data = array();
    function __construct() {
        parent::__construct();
        $this->load->model('backoffice/Contentmodel');
        $this->load->helper('text');
        $this->load->library('pagination');
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()!=true){
            header('location: '.BASEURL.'/backoffice/Admin');
        }
    }
    //Check User auth token
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
    //Website Post Listing
	function post_management(){
        $data['page_title'] = 'Post Management';
        $config['base_url'] = base_url('backoffice/Content/post_management');        
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
        $data['postlist'] = $this->Contentmodel->post_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $config['total_rows'] = $this->Contentmodel->count_post_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/post_management',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Change post status 
    function changeStatus(){
    	$result = $this->Contentmodel->changeStatus();	
    }
    //View Post Detail
    function viewPost(){
    	$id = $this->uri->segment(4);
    	$data['page_title'] = 'Post Detail';
	    $postid = base64_decode(urldecode($id));
	    $data['postArr']=$this->Contentmodel->postDetail($postid);	
	    $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/viewPost',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Edit Post
    function editPost(){
		$id = $this->uri->segment(4);
	    $postid = base64_decode(urldecode($id));
	    $data['page_title'] = 'Edit Post';
	    $data['postArr']=$this->Contentmodel->postDetail($postid);	
	    $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/editPost',$data);
        $this->load->view('backoffice/Common/footer');
	}
	//Edit Post
	function editPostprocess(){
	    if ($_FILES['page_media']['error'] == '0' && $_FILES['page_media']['name'] != '') {
            $path = $this->common->do_upload("uploads/post",'page_media','post');
            $this->data['post_media'] = $path['name'];                      
        } 
        $this->data['post_id'] = $_POST['post_id'];        
        $this->data['post_title'] = $_POST['post_title'];
        $this->data['post_content'] = $_POST['post_content']; 
        $result = $this->Contentmodel->editPostProcess($this->data);
	}

    //Testimonial Listing
    function testimonial(){
        $data['page_title'] = 'Testimonial Management';
        $data['postlist'] = $this->Contentmodel->getTestimonial();
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/testimonial',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Change Testimonial status 
    function testimonialStatus(){
        $result = $this->Contentmodel->testimonialStatus();  
    }
    //View Testimonial Detail
    function viewTestimonial(){
        $id = $this->uri->segment(4);
        $data['page_title'] = 'Testimonial Detail';
        $postid = base64_decode(urldecode($id));
        $data['postArr']=$this->Contentmodel->testimonialDetail($postid);  
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/viewTestimonial',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Add Testimonial
    function addTestimonial(){
        $data['page_title'] = 'Add Testimonial'; 
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/addTestimonial',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Add Testimonial Process
    function addTestimonialprocess(){
        if ($_FILES['page_media']['error'] == '0' && $_FILES['page_media']['name'] != '') {
            $path = $this->common->do_upload("uploads/testimonials",'page_media','testimonials');
            $this->data['post_media'] = $path['name'];                      
        }      
        $this->data['post_title'] = $_POST['post_title'];
        $this->data['designation'] = $_POST['designation'];
        $this->data['post_content'] = $_POST['post_content']; 
        $result = $this->Contentmodel->addTestimonialprocess($this->data);
    }
    //Edit Testimonial
    function editTestimonial(){
        $id = $this->uri->segment(4);
        $postid = base64_decode(urldecode($id));
        $data['page_title'] = 'Edit Testimonial';
        $data['postArr']=$this->Contentmodel->testimonialDetail($postid);  
        $this->load->view('backoffice/Common/header',$data);
        $this->load->view('backoffice/Common/sidebar');
        $this->load->view('backoffice/Content/editTestimonial',$data);
        $this->load->view('backoffice/Common/footer');
    }
    //Edit Testimonial Process
    function editTestimonialprocess(){
        if ($_FILES['page_media']['error'] == '0' && $_FILES['page_media']['name'] != '') {
            $path = $this->common->do_upload("uploads/testimonials",'page_media','testimonials');
            $this->data['post_media'] = $path['name'];                      
        } 
        $this->data['testimonial_id'] = $_POST['testimonial_id'];        
        $this->data['post_title'] = $_POST['post_title'];
        $this->data['designation'] = $_POST['designation'];
        $this->data['post_content'] = $_POST['post_content']; 
        $result = $this->Contentmodel->editTestimonialprocess($this->data);
    }



}