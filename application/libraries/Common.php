<?php
class Common{
    protected $CI;
    public function __construct() {
        $this->CI = & get_instance();
    }

	/**
	 * checkRecord
	 *
	 * @access	public
	 * @param	string	the username
	 * @param	string	what row to grab
	 * @return	string	the data
	 */
	function checkRecord($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}

	function checkRecordId($tname, $field1, $val1, $field2, $val2){
		$query = $this->CI->db->get_where($tname,array($field1 => $val1, $field2 => $val2),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}

	function do_upload($locationDir,$key,$id){
		// echo $id; die;
		$resultArr = array();
		$resultArr['name'] = '';
		if (!empty($_FILES[$key])){
			$myFile = $_FILES[$key];
			$target_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/public/".$locationDir.'/';
			$target_file = $target_dir . basename($myFile["name"]);
			// ensure a safe filename
			$myfilename = str_replace(' ','',$myFile["name"]);
			$name = $id.'_'.time().$myfilename;
		//	echo $name; die;
			//$name = uniqid();
			// preserve file from temporary directory
			$success = move_uploaded_file($myFile["tmp_name"],$target_dir .$name);
			if (!$success) {
					$resultArr['message'] = "An error occured!,please try again.";
			}
			else{
				$resultArr['message'] = "1";
				$resultArr['name'] = $name;
				$mimeType = mime_content_type($target_dir.'/'.$name);
				$fileType = explode('/', $mimeType)[0]; // video|image				
			}
		}
		else{
			$resultArr['message'] = "File not exist.";
		}
		return $resultArr;
	}

	function generateRandomString($length = 6) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}




}