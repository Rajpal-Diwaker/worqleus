<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 */
if(!function_exists('getHashedPassword'))
{
    function getHashedPassword($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }
}
/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 * @param {string} $hashedPassword : This is hashed password
 */
if(!function_exists('verifyHashedPassword'))
{
    function verifyHashedPassword($plainPassword, $hashedPassword)
    {
        return password_verify($plainPassword, $hashedPassword) ? true : false;
    }
}

/**
 *This function checks if facebook id is valid or not
*/

if(!function_exists('validateFacebook'))
{
	function validateFacebook($facebookid)
	{
		/*
		$app_id = '309713089842970'; // Taken from Developer Facebook Account
		$app_secret = 'd17430ecd67a499d28e8ef9b7f25ab2b'; // Taken from Developer Facebook Account
		$access_token = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&client_secret=$app_secret&grant_type=client_credentials";
		$access_token = file_get_contents($access_token); 
		$access_token = json_decode($access_token, true);
		$access_token = $access_token['access_token']; */

		$search = file_get_contents("https://graph.facebook.com/{$facebookid}/picture");
		if(!empty($search)){
			return true;
		}else{
			return false;
		}

	}
}


function lang($line, $id = '')
 {
    $CI =& get_instance();
    $line = $CI->lang->line($line);
    $args = func_get_args();
    if(is_array($args)) array_shift($args);
    if(is_array($args) && count($args))
    {
      foreach($args as $arg)
      {
          $line = str_replace_first('%s', $arg, $line);
      }
    }
    if ($id != '')
    {
    $line = '<label for="'.$id.'">'.$line."</label>";
    }
    return $line;
 }