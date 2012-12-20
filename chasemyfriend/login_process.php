<?php 
/**
* @author   Santhosh
* @function  Login Process
* @file      login_process.php
 */
  include('configuration.php'); 
  
  //post values
  
  $username = $_POST['login_username'];
  $password = $_POST['login_password'];
  if(($hyves->get_authenticate($username, $password)) == 0)
  {
	  echo '<script>window.location="index.php?login_fail"</script>';
	  
  }
  else
  {
	  $id = $hyves->get_authenticate($username, $password);
	  $_SESSION['user'] = $username;
	  $_SESSION['password'] = $password;
	  $_SESSION['id'] = $id;
	  echo '<script>window.location="profile.php"</script>';
  }
  
  
  ?>