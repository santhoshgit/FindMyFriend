// JavaScript Document
// 	Registration Validation
function validate_register()
{
	if(document.getElementById('myname').value == '')
	{
			alert('Please enter your name');
			document.getElementById('myname').focus();
			return false;
	}
	if(document.getElementById('username').value == '')
	{
			alert('Please enter your username');
			document.getElementById('username').focus();
			return false;
	}
	if(document.getElementById('password').value == '')
	{
			alert('Please enter your password');
			document.getElementById('password').focus();
			return false;
	}
	
	if(document.getElementById('city').value == '')
	{
			alert('Please enter your city');
			document.getElementById('city').focus();
			return false;
	}
	if(document.getElementById('country').value == '')
	{
			alert('Please enter your country');
			document.getElementById('country').focus();
			return false;
	}
	
}

//login validator

function validate_login()
{
		if(document.getElementById('login_username').value == '')
	{
			alert('Please enter your username');
			document.getElementById('login_username').focus();
			return false;
	}
	if(document.getElementById('login_password').value == '')
	{
			alert('Please enter your password');
			document.getElementById('login_password').focus();
			return false;
	}
}