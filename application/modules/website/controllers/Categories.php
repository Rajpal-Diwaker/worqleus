<?php
class Categories extends MX_Controller {

 public $client;
    function __construct() {
        parent::__construct();
        $this->load->model('Categoriesmodel');
		$this->load->helper('form');
    }
	
    function web_mobile_it() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(1);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function graphics_designs_arts() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(2);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function business_marketing() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(3);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function architecture_engineering() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(4);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function legal_service() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(5);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function writing() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(6);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

    function tutors() {
        $data['catArr'] = $this->Categoriesmodel->getCategory(7);
        $data['page_title'] = $data['catArr']['category_name'];
        $this->load->view('website/Common/header',$data);
        $this->load->view('website/Categories/subcategory',$data);
        $this->load->view('website/Common/footer');
    }

}