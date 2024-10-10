<?php
namespace Hajiphp\Xtel;

class Request {

	private static $token;

	public function __construct($token) {
		self::$token = $token;
	}

	public static function sendRequest($method, $data = []) {
		$ch = curl_init();

		curl_setopt_array($ch, [
			CURLOPT_URL => 'https://api.telegram.org/bot'.self::$token.'/'.$method,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_POSTFIELDS => $data
		]);
		$response = curl_exec($ch);

		return json_decode($response, TRUE);
	}
	
}



