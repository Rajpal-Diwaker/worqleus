<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contentmodel extends MX_Controller {

//Website Post Listing
function post_management($limit, $start, $search = "", $orderField, $orderDirection){
	$query=$this->db->select('p.post_id,p.post_title,p.post_content,p.post_category,c.p_category_name as category_name,p.post_status')
          ->from('w_post as p')
          ->join('w_post_category as c','p.post_category=c.p_category_id')
          ->or_like('p.post_title', $search)
          ->limit($limit, $start)
          ->order_by($orderField, $orderDirection)
          ->order_by($orderField, $orderDirection)
          ->get();
	return $query->result();
}
//Website Post Listing count
function count_post_management($limit, $start, $search = "", $orderField, $orderDirection){
    $query = $this->db->or_like('post_title', $search)->order_by($orderField, $orderDirection)->get('w_post');
    return $query->num_rows();
}
//Change post status 
function changeStatus(){
    if($_POST['type']==1){
      $data = ['post_status' => 'active','updated_on' => date('Y-m-d H:m:s')];
    }else{
      $data = ['post_status' => 'inactive','updated_on' => date('Y-m-d H:m:s')];
    }
    $this->db->where('post_id',$_POST['post_id'])
          ->update('w_post',$data);
    if ($this->db->affected_rows() > 0) {
      echo 1; die;
    }else{
      echo 0; die;
    }
}
//Post Detail
function postDetail($postid){
  $query=$this->db->select('p.post_id,p.post_title,p.post_content,p.post_media,p.post_banner,p.post_status')
          ->from('w_post as p')
          ->join('w_post_category as c','p.post_category=c.p_category_id')
          ->where('p.post_id',$postid)
          ->get();
  $result = $query->result_array();
  foreach ($result as $value) {
        if(file_exists( FILEPATH. $value['post_media']) && $value['post_media'] != ""){
            $post_media=FILEURL.$value['post_media'];           
        }else{
            $post_media ='';
        }
        if(file_exists( FILEPATH. $value['post_banner']) && $value['post_banner'] != ""){
            $post_banner=FILEURL.$value['post_banner'];           
        }else{
            $post_banner ='';
        }
        $data = [
            'post_id' => $value['post_id'],
            'post_title' => $value['post_title'],
            'post_content' => $value['post_content'],
            'post_media' => $post_media,
            'post_banner' => $post_banner,
        ];
    }
    return $data;
}

function editPostProcess($array){
  if(!empty($array['post_media'])){
    $data = ['post_title' => $array['post_title'],'post_content' => $array['post_content'],'post_media' => 'post/'.$array['post_media'],'updated_on' => date('Y-m-d H:i:s')];
  }else{
    $data = ['post_title' => $array['post_title'],'post_content' => $array['post_content'],'updated_on' => date('Y-m-d H:i:s')];
  }
  $this->db->where('post_id',$array['post_id'])
      ->update('w_post',$data);
  if ($this->db->affected_rows() > 0) {
      header('location: '.ADMINURL.'Content/post_management');
  }else{
      header('location: '.ADMINURL.'Content/post_management');
  }
}
//Testimonial Listing
function getTestimonial(){
  $postQuery = $this->db->select('testimonial_id,name,designation,media,content,status')
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
          'post_media' => $media,
          'status' => $post['status']
        ];  
  }
  return $responseArr;
}
//Change Testimonial Status
function testimonialStatus(){
    if($_POST['type']==1){
      $data = ['status' => 'active','updated_on' => date('Y-m-d H:m:s')];
    }else{
      $data = ['status' => 'inactive','updated_on' => date('Y-m-d H:m:s')];
    }
    $this->db->where('testimonial_id',$_POST['post_id'])
          ->update('w_testimonials',$data);
    if ($this->db->affected_rows() > 0) {
      echo 1; die;
    }else{
      echo 0; die;
    }
}
//Testimonial Detail
function testimonialDetail($id){
  $query=$this->db->select('testimonial_id,name,designation,content,media,status')
          ->where('testimonial_id',$id)
          ->get('w_testimonials');
  $result = $query->result_array();
  foreach ($result as $value) {
        if(file_exists( FILEPATH. $value['media']) && $value['media'] != ""){
            $media=FILEURL.$value['media'];           
        }else{
            $media ='';
        }
        $responseArr = [
          'testimonial_id' => $value['testimonial_id'],
          'post_title' => $value['name'],
          'designation' => $value['designation'],
          'post_content' => $value['content'],
          'post_media' => $media,
          'status' => $value['status']
        ];  
    }
    return $responseArr;
}
//Edit Testimonial
function editTestimonialprocess($array){
  if(!empty($array['post_media'])){
    $data = ['name' => $array['post_title'],'designation' => $array['designation'],'content' => $array['post_content'],'media' => 'testimonials/'.$array['post_media'],'updated_on' => date('Y-m-d H:i:s')];
  }else{
    $data = ['name' => $array['post_title'],'designation' => $array['designation'],'content' => $array['post_content'],'updated_on' => date('Y-m-d H:i:s')];
  }
  $this->db->where('testimonial_id',$array['testimonial_id'])
      ->update('w_testimonials',$data);
  if ($this->db->affected_rows() > 0) {
      header('location: '.ADMINURL.'Content/testimonial');
  }else{
      header('location: '.ADMINURL.'Content/testimonial');
  }
}
//Edit Testimonial Process
function addTestimonialprocess($array){
  $data = ['name' => $array['post_title'],'designation' => $array['designation'],'content' => $array['post_content'],'media' => 'testimonials/'.$array['post_media'],'created_on' => date('Y-m-d H:i:s')];
  $this->db->insert('w_testimonials',$data);
  if ($this->db->affected_rows() > 0) {
      header('location: '.ADMINURL.'Content/testimonial');
  }else{
      header('location: '.ADMINURL.'Content/testimonial');
  }
}


function resizeImage($filename,$locationDir){
  $source_path = dirname($_SERVER["SCRIPT_FILENAME"])."/public/".$locationDir.'/'.$filename;
  $target_path = dirname($_SERVER["SCRIPT_FILENAME"])."/public/".$locationDir.'/';
  $config = [
      'image_library' => 'gd2',
      'source_image' => $source_path,
      'new_image' => $target_path,
      'maintain_ratio' => TRUE,
      'width' => 600,
    ];
  //echo"<pre>";print_r($config); die;
  $result = $this->load->library('image_lib', $config);
  if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors(); 
  }   
  $this->image_lib->clear();
  return $filename;
}


}
   