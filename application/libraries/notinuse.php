<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common {

	/**
	 * Constructor
	 *
	 * Get instance for Database Lib
	 *
	 * @access	public
	 */
	function Common()
	{
		$this->CI =& get_instance();

		log_message('debug', "User Class Initialized");
	}

	// --------------------------------------------------------------------

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
	
	function checkMobile($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	function socialId($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	function user_idd($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	//CHEK USER IP
	function checkIp($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	function generateRandomString($length = 6) {
    $characters = '0123456789iWantUabcdefghijklmnopqrstuvwxyzTodayABCDEFGHIJKLMNOPQRSTUVWXYZTechugo';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
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
			/*	$mimeType = mime_content_type($target_dir.'/'.$name);
				$fileType = explode('/', $mimeType)[0]; // video|image
				if($fileType == 'video'){
					$ffmpeg = FFMpeg\FFMpeg::create();
					$video = $ffmpeg->open($name);
					$frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($sec));
					$frame->save($thumbnail);
				}	*/				
			}
		}
		else{
			$resultArr['message'] = "File not exist.";
		}
		return $resultArr;
	}



	     //   



	public function byCurlMethod(array $array,$controller = NULL){
		$url = 'http://'.$_SERVER['HTTP_HOST'].'/api/'.$controller; 
		$headers = array();
		$headers[] = 'Appkey: '.APPKEY;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$array);  //Post Fields
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
		//echo "<pre>";print_r($server_output);die;
		return $server_output ;
	}
/*	
 function sendPushMessage($deviceType, $deviceToken, $payload){
  
  $data = $payload;
  if($deviceType == "iphone"){
   $payload = json_encode($payload);
   //$apnsHost = 'gateway.push.apple.com';  
   $apnsHost = 'gateway.sandbox.push.apple.com';
   $apnsPort = '2195';
   $apnsCert = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REDIRECT_BASE'].'/public/pem/MemoryShare.p12';
   $passPhrase = '';
   $streamContext = stream_context_create();
   stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);
   stream_context_set_option($streamContext, 'ssl', 'passphrase', $passPhrase);
   $apnsConnection = stream_socket_client('ssl://' . $apnsHost . ':' . $apnsPort, $error, $errorString, 60, STREAM_CLIENT_CONNECT, $streamContext);
   if ($apnsConnection == false){
    //echo "False";exit;
   }
   $apnsMessage = chr(0) . pack("n",32) . pack('H*', str_replace(' ', '', $deviceToken)) . pack("n",strlen($payload)) . $payload;
   //print_r($apnsMessage);
   if(fwrite($apnsConnection, $apnsMessage)) {
    //echo "Done";exit;
   }
   unset($payload);
   fclose($apnsConnection);
   
  }elseif($deviceType == "android"){ 
   $this -> android_push($deviceToken, $data);
  }
 }	
	
	*/
	


 function sendPushMessage($deviceType, $deviceToken, $payload){
  // Set POST variables
	 $data = $payload;
	// print_r($payload); die;
 //echo $deviceType;	print_r($data); echo $deviceToken; die;
  $url = 'https://fcm.googleapis.com/fcm/send';

	if($deviceType =='ios'){
	  $fields = array(
	   "to" =>$deviceToken,
	   "content_available" => true, 
	   "data" => $data['aps'],
	   "notification"=> array(
		  "title" => '',
		  "data" => $data['aps'],
		   "body" => $data['aps']['alert']
	   ),
		"priority" => 'high'
	  );  		
	}else{
	  $fields = array(
	   "to" =>$deviceToken,
	   "data"=> array(
		   "body" => $data['aps'],
		   "title" => 'Memory Share',
		   "sound" => "default"
	   )
	  ); 
	}
  
  $api_key = 'AAAAuQrCO1A:APA91bHyPhO1cVYOOBtPoBn9GUOoBgNAU9QeDmldOBANcDw63yAgH7dtvn5ICeeKbgLC509--d0f3urregrWv438qWtX-sopp_Cqf69FCuiCJA8yp_KuAXLxoqYdcDCXbRufr05wjJLb';
  $headers = array(
   'Authorization: key='.$api_key,
   'Content-Type: application/json'
  );
  // Open connection
  $ch = curl_init();

  // Set the url, number of POST vars, POST data
  curl_setopt($ch, CURLOPT_URL, $url);

  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Disabling SSL Certificate support temporarly
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
//  print_r(json_encode($fields)); die;
  // Execute post
  $result = curl_exec($ch);
  //int_r($result); die;
  if ($result === FALSE) {
      die('Curl failed: ' . curl_error($ch));
  }	
	
	
}

}
// END Common Class
