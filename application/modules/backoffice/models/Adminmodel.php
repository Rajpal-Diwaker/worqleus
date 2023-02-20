<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends MX_Controller {

	function login($email,$password){
		$sql = "SELECT admin_id,fullname,email,password_hash FROM w_admin WHERE status='active' and email = ?";
		$query = $this->db->query($sql, array($email));
		$result = $query->result_array();
		if(verifyHashedPassword($password, $result[0]['password_hash'])){
			$user_id = $result[0]['admin_id'];
			$accesskey = md5($user_id.rand (1000000, 9999999));
			$accessdata = ['auth_token' => $accesskey,'created_on' => date('Y-m-d H:i:s')];
			$this->db->where('admin_id',$user_id);
			$this->db->update('w_admin_auth',$accessdata);
			return [
				'admin_id' => $result[0]['admin_id'],
				'fullname' => $result[0]['fullname'],
				'email' => $result[0]['email'],
				'token' => $accesskey
				];
		}
		else{
			return false;
		}
	}

	function adminprofile(){
		$adminid = $this->session->userdata('admin_id');
		$query = $this->db->select('admin_id,fullname,email,status')
					->where('admin_id',$adminid)
					->get('w_admin');
		$result = $query->result_array();
		return $result[0];
	}

	function update_admindata(){
		//print_r($_POST); die;
		$adminid = $this->session->userdata('admin_id');
		$data = ['fullname' => $_POST['fullname'],'email' =>  $_POST['email']];
		$this->db->where('admin_id',$adminid)
				->update('w_admin',$data);
		return true;
	}


	function change_password($oldpassword,$newpassword){
		$adminid = $this->session->userdata('admin_id');
		$sql = "SELECT admin_id,password_hash FROM w_admin WHERE admin_id = ?";
		$query = $this->db->query($sql, array($adminid));
		$result = $query->result_array();
		if(verifyHashedPassword($oldpassword, $result[0]['password_hash'])){
			$data = ['password_hash'=>getHashedPassword($newpassword)];
			$this->db->where('admin_id',$adminid)
					->update('w_admin',$data);
			if ($this->db->affected_rows() > 0) {
				echo 1; die;
			}else{
				echo 2; die;
			}
		}else{
			echo 2; die;
		}
	}

}
   