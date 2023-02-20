<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends MX_Controller {
	//User Sign up process
	function signupprocess(){
		$first_name = $this->security->xss_clean($_POST['first_name']);
		$last_name = $this->security->xss_clean($_POST['last_name']);
		$email = $this->security->xss_clean($_POST['email']);
		$password = $this->security->xss_clean($_POST['password']);
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)){
			//$this->session->sess_destroy();
			$pass = getHashedPassword($password);
			$data = ['user_first_name' => $first_name,'user_last_name' => $last_name,'user_email' => $email,'user_password' => $pass,'created_on' => date('Y-m-d H:i:s'),'last_login' => date('Y-m-d H:i:s')];
			$this->db->insert('w_user',$data);
			$user_id = $this->db->insert_id();
			if ($this->db->affected_rows() > 0) {
				return [
					'user_id' => $user_id,
					'user_first_name' => $first_name,
					'user_last_name' => $last_name,
					'user_email' => $email
				];
			}else{
				header('location: '.BASEURL.'/signup');
			}
		}
	}
	//User Sign in process
	function signinprocess($email,$password){
		//$this->session->sess_destroy();
		$sql = "SELECT user_id,user_first_name,user_last_name,user_email,user_password FROM w_user WHERE user_status='active' and user_email = ?";
		$query = $this->db->query($sql, array($email));
		$result = $query->result_array();
		if(verifyHashedPassword($password, $result[0]['user_password'])){
			$user_id = $result[0]['user_id'];
			$logindata = ['last_login' => date('Y-m-d H:i:s')];
			$this->db->where('user_id',$user_id);
			$this->db->update('w_user',$logindata);
			return [
					'user_id' => $user_id,
					'user_first_name' => $result[0]['user_first_name'],
					'user_last_name' => $result[0]['user_last_name'],
					'user_email' => $result[0]['user_email']
				];
		}
		else{
			return false;
		}
	}

	function forgotprocess($email){
		if(!empty($email)){
			$pin = $this->common->generateRandomString();
			$expirytime = strtotime('+5 minutes', time());
			$data = ['forgot_password' => $pin,'forgot_status' => 'pending','forgot_time' => $expirytime];
			$this->db->where('user_email',$email)
					->update('w_user',$data);
			if ($this->db->affected_rows() > 0) {
				return ['email' => $email,'pin' => $pin];
			}else{
				return false;
			}
		}
	}

	function reset_password($userid){
		$query = $this->db->select('user_id')
					->where('forgot_password',$userid)
					->where('forgot_status','pending')
					->where('forgot_time>=',time())
					->get('w_user');
		if($query->num_rows()>0){
			$result = $query->result_array();
			return urlencode(base64_encode($result[0]['user_id']));
		}else{
			return 'Expired';
		}
	}

	function resetpasprocess($password,$user_id){
		if(!empty($password) && !empty($user_id)){
			$pass = getHashedPassword($password);
			$data = ['user_password' => $pass,'forgot_password' => '','forgot_status' => 'success','forgot_time' => 0,'updated_on' => date('Y-m-d H:i:s')];
			$this->db->where('user_id',$user_id)
				->update('w_user',$data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else{
				return false;
			}
		}
	}

}
   