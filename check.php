<?Php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please <a href=login.php>login</a> and use this page </font></center>";
exit;
}else{
echo "

<div data-alert class='alert-box success radius'>
  Welcome $_SESSION[userid]!
</div>
	<center>
			
				<a href=update-profile.php class='button success'>Update Profile</a> . 
				<a href=change-password.php class='button'>Change Password</a>
			
	</center>";
}
?>