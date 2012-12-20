<?php 
/**
* @author   Santhosh
* @function  Registration Process
* @file      registration_process.php
 */
  include('configuration.php'); 
  
  //post values
  
  $name = $_POST['myname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  
  $full_address = "".$address.",+".$city.",+".$country.""; // address to be passed to google api
  
  echo $latitude = $hyves->latitute($full_address); // returns latitude from hyves class
 // $longitude = $hyves->longitude($full_address); // returns longitude from hyves class
  
  if($latitude != '' && $longitude != '')//if success
  {
	  $query = 'INSERT INTO hy_users(name,username,password,address,city,country,lat,lon) VALUES("'.$name.'","'.$username.'","'.$password.'","'.$address.'","'.$city.'","'.$country.'","'.$latitude.'","'.$longitude.'")';
	  $sql = $db->query($query);	
	  echo '<script>window.location="index.php?success"</script>';
  }
  else
  {
	  	echo '<script>window.location="index.php?fail"</script>';
  }
  
  
  
  ?>