<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoriesmodel extends MX_Controller {
	//Get Category
	function getCategory($categoryId){
		$postQuery = $this->db->select('category_id,category_name,category_content,category_media,category_bannner,category_url,meta_keywords,meta_description')
						->where('category_id',$categoryId)
						->where('category_status','active')
						->get('w_category');
		$postArr = $postQuery->result_array();
		foreach($postArr as $post){
			if(file_exists( FILEPATH. $post['category_media']) && $post['category_media'] != ""){
	            $category_media=FILEURL.$post['category_media'];      
	        }else{
	            $category_media ='';
	        }
	        if(file_exists( FILEPATH. $post['category_bannner']) && $post['category_bannner'] != ""){
	            $category_bannner=FILEURL.$post['category_bannner'];      
	        }else{
	            $category_bannner ='';
	        }
	        $responseArr = [
	        	'category_id' => $post['category_id'],
	        	'category_name' => $post['category_name'],
	        	'category_content' => $post['category_content'],
	        	'meta_keywords' => $post['meta_keywords'],
	        	'meta_description' => $post['meta_description'],
	        	'category_media' => $category_media,
	        	'category_bannner' => $category_bannner,
	        	'category_url' => $post['category_url']
	        ];	
		}
		return $responseArr;
	}
	//Get Testimonial
	function getTestimonial(){
		$postQuery = $this->db->select('testimonial_id,name,designation,media,content')
						->where('status','active')
						->get('w_testimonials');
		$postArr = $postQuery->result_array();
		foreach($postArr as $post){
			if(file_exists( FILEPATH. $post['media']) && $post['media'] != ""){
	            $media=FILEURL.$post['media'];      
	        }else{
	            $media ='';
	        }
	        $responseArr[] = [
	        	'testimonial_id' => $post['testimonial_id'],
	        	'post_title' => $post['name'],
	        	'designation' => $post['designation'],
	        	'post_content' => $post['content'],
	        	'post_media' => $media
	        ];	
		}
		return $responseArr;
	}

}
   