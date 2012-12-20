<?php
    /*
        Code developed by Santhosh Subramani (santhosh.r.subramani@gmail.com)
		Hyves Test2
		Class : hyves.class.php
    */
class Hyves 
{
	
	private $hyves;
	private $output;
	private $cordinates;
	private $lat;
	private $lon;
	/*  Function to get latitude 
	    Using the JSON concept. 
		Passing the address through the query string to google api
		Returns the latitude id address is valid... it returns null value when address is invalid
	*/
	function latitute($address)
    {
        $this->cordinates=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
		$this->output = json_decode($this->cordinates);
		$this->hyves =  $this->output->results[0]->geometry->location->lat;
		return $this->hyves;
    }
	
	/*  Function to get longitude 
	    Using the JSON concept. 
		Passing the address through the query string to google api
		Returns the longitute id address is valid... it returns null value when address is invalid
	*/
	function longitude($address)
    {
        $cordinates=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
		$output = json_decode($this->cordinates);
		$this->hyves =  $output->results[0]->geometry->location->lng;
		return $this->hyves;
    }
	
	/*  Function to login authentication  
	    Checks for username and password
		Returns the userid to the system
	*/
	
	function get_authenticate($user,$pass)
    {
        global $db;
		$query = 'SELECT * FROM hy_users WHERE username = "'.$user.'" AND password = "'.$pass.'"';
		$sql = $db->query($query);
		if(($db->total_rows($sql)) > 0)
		{
			$output = $db->fetch_array($sql);
			$this->hyves = $output['user_id'];
			return $this->hyves;
		}
		else
		{
			return 0;
		}
    }
	
	/*  Function linking to the Google API url
	*/
	
	
	function MapURL() 
	{
		return "<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>\n";	
	}
	
		/*  Function returns the map of the given latitue and log as parameter
		param latitude and longitude
	*/
	
	function  InitializeMap($lat,$lon)
	{
        $scr = "";
		$scr .= "<script type=\"text/javascript\">\n";
		$scr .= "var directionDisplay;\n";
		$scr .= " var directionsService = new google.maps.DirectionsService();\n";
        $scr .= " function initialize() {\n";
        $scr .= "directionsDisplay = new google.maps.DirectionsRenderer();\n";
        $scr .= " var myOptions = {\n";
        $scr .= " zoom: 9,\n";
        $scr .= " mapTypeId: google.maps.MapTypeId.ROADMAP,\n";
        $scr .= "    center: new google.maps.LatLng(".$lat.", ".$lon.")\n";
        $scr .= "   };\n";
        $scr .= "var map = new google.maps.Map(document.getElementById('map_canvas'),\n";
        $scr .= "   myOptions);\n";
        $scr .= " directionsDisplay.setMap(map);\n";
        $scr .= " directionsDisplay.setPanel(document.getElementById('directions-panel'));\n";
        $scr .= "  var control = document.getElementById('control');\n";
        $scr .= " control.style.display = 'block';\n";
        $scr .= " map.controls[google.maps.ControlPosition.TOP].push(control);\n";
        $scr .= " }\n";
		$scr .= "</script>\n";
		return $scr;
	}
	
   
}

?>



