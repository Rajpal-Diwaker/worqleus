<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends MX_Controller {

//Website User Listing
function user_management($limit, $start, $search = "", $orderField, $orderDirection){
	$query=$this->db->select('user_id,user_first_name,user_last_name,user_email,user_status,created_on,last_login')
          ->or_like('user_first_name', $search)
          ->or_like('user_email', $search)
          ->limit($limit, $start)
          ->order_by($orderField, $orderDirection)
          ->order_by($orderField, $orderDirection)
          ->get('w_user');
	return $query->result();
}
//Website User Listing count
function count_user_management($limit, $start, $search = "", $orderField, $orderDirection){
    $query = $this->db->or_like('user_first_name', $search)->or_like('user_email', $search)->order_by($orderField, $orderDirection)->get('w_user');
    return $query->num_rows();
}
//User Detail
function userDetail($userid){
	$query = $this->db->select('user_id,user_first_name,user_last_name,user_email,user_status,created_on,last_login')
				->where('user_id',$userid)
				->get('w_user');
	$result = $query->result_array();
	return $result[0];
}
//Change User status 
function changeuserStatus(){
    if($_POST['type']==1){
      $data = ['user_status' => 'active','updated_on' => date('Y-m-d H:m:s')];
    }else{
      $data = ['user_status' => 'inactive','updated_on' => date('Y-m-d H:m:s')];
    }
    $this->db->where('user_id',$_POST['user_id'])
          ->update('w_user',$data);
    if ($this->db->affected_rows() > 0) {
      echo 1; die;
    }else{
      echo 0; die;
    }
}



}
   