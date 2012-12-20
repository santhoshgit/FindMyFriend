<?php 
	include('configuration.php');
	include('includes/language.inc.php');
	$query = "SELECT * FROM hy_users WHERE user_id = '".$_SESSION['id']."'";
	$sql = $db->query($query);
	$row = $db->fetch_array($sql);
	$lat = $row['lat'];
	$lon = $row['lon'];
	$content = '<h4>'.$row['name'].'';
					$content .= '<p>'.$row['city'].', '.$row['country'].'</p>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Friend Locator</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <h1><span class="first_it">chase my</span><span class="sec_it"> friend</span></h1>
	<div class="wrapper">
    	<div class="left">
        	<?php echo $hyves->MapURL();?>
            <?php echo $hyves->InitializeMap($lat,$lon);?>
<script type="text/javascript">
      function calcRoute(name,city,country) 
	  {
		var start = '<?php echo $row['city'].','.$row['country'];?>';
		alert('Lets chase '+name+' in '+city);
        var end = city+','+country;
        var request = {
          origin: start,
          destination: end,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          }
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
</script>
    
    <div id="map_canvas" style="width: 700px; height:250px"></div>
    <div id="directions-panel" style="width: 700px; height:250px;overflow:auto;" ></div>
        </div>
    	<div class="right">
        <fieldset>
            	<legend>My Profile</legend>
                <?php
					echo '<h4>Welcome '.$row['name'].',</h4>';
					echo '<p>'.$row['city'].', '.$row['country'].'</p>';
					echo '<a href="logout_process.php">Logout</a>';
				?>
            </fieldset>
        	<fieldset>
            	<legend>My Friends</legend>
                <?php
					$query = "SELECT * FROM hy_users WHERE user_id <> '".$_SESSION['id']."'";
					$sql = $db->query($query);
					while($row = $db->fetch_array($sql))
					{
						echo '<h5>'.$row['name'].',</h5>';
						echo '<p>'.$row['city'].', '.$row['country'].'</p>';
						echo '<a href="javascript:" onclick="calcRoute(\''.$row['name'].'\',\''.$row['city'].'\', \''.$row['country'].'\')">Enter his location</a>';
						echo '<hr />';
					}
				?>
            </fieldset>
        </div>
    </div>
</body>
</html>
