<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmodel extends MX_Controller {
	//Get Post
	function getPost($categoryId){
		$postQuery = $this->db->select('post_title,post_content,post_media,post_banner,post_url')
						->where('post_category',$categoryId)
						->where('post_status','active')
						->get('w_post');
		$postArr = $postQuery->result_array();
		foreach($postArr as $post){
			if(file_exists( FILEPATH. $post['post_media']) && $post['post_media'] != ""){
	            $post_media=FILEURL.$post['post_media'];      
	        }else{
	            $post_media ='';
	        }
	        if(file_exists( FILEPATH. $post['post_banner']) && $post['post_banner'] != ""){
	            $post_banner=FILEURL.$post['post_banner'];      
	        }else{
	            $post_banner ='';
	        }
	        $responseArr[] = [
	        	'post_title' => $post['post_title'],
	        	'post_content' => $post['post_content'],
	        	'post_media' => $post_media,
	        	'post_banner' => $post_banner,
	        	'post_url' => $post['post_url']
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
   