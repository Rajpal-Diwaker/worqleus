<?php
class Web extends MX_Controller {

 public $client;
    function __construct() {
        parent::__construct();
        $this->load->model('Webmodel');
		$this->load->helper('form');
    }
	
    function index() {
        $data['scopeArr'] = $this->Webmodel->getPost(1);
        $data['paymentServices'] = $this->Webmodel->getPost(2);
        $data['testimonial'] = $this->Webmodel->getTestimonial();
    //    $data['howweWork'] = $this->Webmodel->getPost(3);
        $data['page_title'] = 'Worqleus';
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/home');
        $this->load->view('website/Common/footer');
    }

}