<?php 
	/**
* @author   Santhosh
* @function  Logout Process
* @file      logout_process.php
 */
  include('configuration.php'); 
  session_unset();
  echo '<script>window.location="index.php"</script>';
?>