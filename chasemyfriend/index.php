<?php 
// Main Page
//Contains Login and Registration Form
include('header.php');?>
    	<div class="left">
        		<h1 class="top_heading">chase</h1>
                <h1 class="top_heading">my</h1>
                <h1 class="bottom_heading">friend</h1>
                <h3 class="sub_head">test no: 2</h3>
                <h3 class="sub_head">Name: Santhosh.S</h3>
                <h3 class="sub_head">Company: Hyves</h3>
         </div>
    	<div class="right">
        <fieldset>
        <legend> Login</legend>
        	<form name="loginForm" id="loginForm" method="post" action="login_process.php" onsubmit="return validate_login();">
            <?php 
				if(isset($_GET['login_fail'])){echo '<span class="red">'.$login_fail.'</span>';}
			?>
        	<table>
                <tr>
                	<td>
                   		 Username
                    </td>
                    <td>
                    	<input type="text" name="login_username" id="login_username"/>
                    </td>
                </tr>
                 <tr>
                	<td>
                    	Password
                    </td>
                    <td>
                    	<input type="password" name="login_password" id="login_password" />
                    </td>
                </tr>
                <tr>
                	<td colspan="2" align="right">
                    	<input type="submit" name="login" id="login" value="Login" />
                    </td>
                   
                </tr>
            </table>
            </form>
            </fieldset>
            <br />
            <fieldset>
        <legend> Registration</legend>
        	<form name="loginForm" id="loginForm" method="post" action="registration_process.php" onSubmit="return validate_register();">
            <?php 
				if(isset($_GET['success'])){echo '<span class="green">'.$registration_success.'</span>';}
				 if(isset($_GET['fail'])){echo '<span class="red">'.$registration_failure.'</span>';}
			?>
        	<table>
                <tr>
                	<td>
                   		 Name
                    </td>
                    <td>
                    	<input type="text" name="myname" id="myname" />
                    </td>
                </tr>
                 <tr>
                	<td>
                   		 Username
                    </td>
                    <td>
                    	<input type="text" name="username" id="username" />
                    </td>
                </tr>
                 <tr>
                	<td>
                    	Password
                    </td>
                    <td>
                    	<input type="password" name="password" id="password" />
                    </td>
                </tr><tr>
                	<td>
                   		 Address
                    </td>
                    <td>
                    	<textarea name="address" id="address" cols="30" rows="4"></textarea>
                    </td>
                </tr>
                 <tr>
                	<td>
                    	City
                    </td>
                    <td>
                    	<input type="text" name="city" id="city" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	Country
                    </td>
                    <td>
                    	<input type="text" name="country" id="country" />
                    </td>
                </tr>
                <tr>
                	<td colspan="2" align="right">
                    	<input type="submit" name="login" id="login" value="Register" />
                    </td>
                   
                </tr>
            </table>
            </form>
            </fieldset>
        </div>
    </div>
</body>
</html>