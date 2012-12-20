<?php
  /*
        Code developed by Santhosh Subramani (santhosh.r.subramani@gmail.com)
		Hyves Test2
		Class : mysql.class.php
    */
class mysql_db
{
  
    private $output;
	private $value;
	
	/**
	* Check the parameter and setting the connection
	*/
	public function __construct($configuration) 
	{
	   extract($configuration);
	   if ($host != '' && $user != '' && $name != '') {
			if($this->value = mysql_connect($host, $user, $pass)) {
				return mysql_select_db($name,$this->value);}
			 else{return false;}}
		else{return false;}
	}
	
	
	/**
		* Retrieve a Singleton Instance of this class
		*/
	public static function getInstance($configuration)
	{
		extract($configuration);
		static $Instances = array();
		$key = "$host:$user:$password:$database";
		if (!isset($Instances[$key])) {
		$Instances[$key] = new mysql_db($configuration);
		}
		return $Instances[$key];
	}
	
	/**
	* Query Execution
	* param $query
	*/
	public function query($query) 
	{
		$this->output = mysql_query($query);
		if (!$this->output) {
			echo "Error:".mysql_error();
		}
		else
		{
			return $this->output;
		}
	}
	
	
	/**
	* Reterive the Result
	* param $query
	*/
	public function fetch_array($result)
	{
		return @mysql_fetch_assoc($result);
	}

	
	
	/**
	* Number of Rows
	* param $result
	*/
	public function total_rows($result)
	{
		return mysql_num_rows($result);
	}

	
}

?>



