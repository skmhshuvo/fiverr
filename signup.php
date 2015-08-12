<?

include "config.php"; // database connection details stored here

?>
<?php include 'include/header.php';?>

<table border='0' width='50%' cellspacing='0' cellpadding='0' align=center class="tabup">
	<form name=form1 method=post action=signupck.php onsubmit='return validate(this)'>
	<input type=hidden name=todo value=post>

	<tr bgcolor='#f1f1f1'>
	<td align=center colspan=2>
	<font face='Verdana' size='2' >
	<b>Signup</b>
	</td>
	</tr>
	<tr>
	<td >&nbsp;<font face='Verdana' size='2' >User ID (alphanumeric  chars only)</td>
	<td ><font face='Verdana' size='2'><input type=text name=userid class="form-control"></td>
	</tr>

	<tr bgcolor='#f1f1f1'>
	<td >&nbsp;<font face='Verdana' size='2' >Password</td>
	<td ><font face='Verdana' size='2'>
	<input type=password name=password class="form-control">
	</td>
	</tr>

	<tr>
	<td >&nbsp;<font face='Verdana' size='2' >Re-enter Password</td>
	<td ><font face='Verdana' size='2'><input type=password name=password2 class="form-control"></td>
	</tr>


	<tr bgcolor='#f1f1f1'>
	<td ><font face='Verdana' size='2' >&nbsp;Email</td>
	<td  ><input type=text name=email class="form-control"></td>
	</tr>

	<tr >
	<td >&nbsp;<font face='Verdana' size='2' >Name</td>
	<td ><font face='Verdana' size='2'><input type=text name=name class="form-control"></td>
	</tr>

	<tr bgcolor='#f1f1f1'>
	<td >&nbsp;<font face='Verdana' size='2' >Sex</td>
	<td ><font face='Verdana' size='2'>  
	<input type='radio' value=male checked name='sex'>Male 
	<input type='radio' value=female  name='sex'>Female
	</td>
	</tr>

	<tr >
	<td >&nbsp;<font face='Verdana' size='2' >I agree to terms and conditions</td>
	<td ><font face='Verdana' size='2'>
	<input type=checkbox name=agree value='yes'>
	</td>
	</tr>

	<tr bgcolor='#f1f1f1'>
	<td align=center colspan=2> 
	<input type=submit value=Signup class="btn btn-success"> 
	<a href=login.php class="btn btn-primary">Login</a>
	</td>
	</tr>
</table>

<?Php
require "bottom.php"; // Tracking who is online
?>

<?php include 'include/footer.php';?>