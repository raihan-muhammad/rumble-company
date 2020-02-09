<?php
class response {
	var $db;

	public function send($response, $encript=FALSE){
		if($encript){
	  	// echo base64_encode(json_encode($response,JSON_UNESCAPED_UNICODE));
			echo json_encode($response,JSON_UNESCAPED_UNICODE);
		}else{
			echo json_encode($response,JSON_UNESCAPED_UNICODE);
		}
	}

	public function post($parameter,$clean=TRUE,$db=null){
		$this->db = $db;
		if(empty($_POST[$parameter])){
			return "";
		}

		$input = $_POST[$parameter];
		if($clean){
			$input = $this->clean($input);
		}
		return $input;
	}

	public function postDecode($parameter,$clean=TRUE){
		if(empty($_POST[$parameter])){
			return "";
		}

		$input = $_POST[$parameter];
		if($clean){
			$input = $this->clean($input);
		}
		return base64_decode($input);
	}

	public function get($parameter,$clean=TRUE){
		if(empty($_GET[$parameter])){
			return "";
		}

		$input = $_GET[$parameter];
		if($clean){
			$input = $this->clean($input);
		}
		return $input;
	}

	public function getDecode($parameter,$clean=TRUE){
		if(empty($_GET[$parameter])){
			return "";
		}

		$input = $_GET[$parameter];
		if($clean){
			$input = $this->clean($input);
		}
		return base64_decode($input);
	}

	public function clean($string){
		if($this->db != null){
			$con = mysqli_connect($this->db->hostname,$this->db->username,$this->db->password,$this->db->database);
			$string = mysqli_real_escape_string($con,$string);
		}else{
	 	// $string = mysql_real_escape_string($string);
		}

		$string = trim($string);
		$string = strip_tags($string);
		$string = trim($string);
		$string = preg_replace('/\\\\/', '', $string);

		$string = str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a", "<", ">", "(", ")", "[", "]", "{", "}",urlencode('\\'), urlencode("\0"), urlencode("\n"), urlencode("\r"), urlencode("'"), urlencode('"'), urlencode("\x1a"), urlencode("<"), urlencode(">"), urlencode("("), urlencode(")"), urlencode("["), urlencode("]"), urlencode("{"), urlencode("}")), '', $string); 
		return $string;
	}

	public function str($string=""){
		// $string = iconv("UTF-8","latin1",mb_convert_encoding($string, "UTF-8", 'HTML-ENTITIES'));
		// $string = mb_convert_encoding($string, "latin1");
		return $string;
	}
	
}

?>