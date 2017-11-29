<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* This uses itextmo sms api
*/
class Itextmo_sms {

	// Visit www.itexmo.com/developers.php for more info about this API
    public function send_sms($number,$message,$apicode)
    {
    	$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
		$param = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($itexmo),
		    ),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
    }
}