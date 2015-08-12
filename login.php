<?php include 'include/header.php'; ?>

<center>

<form action='loginck.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
  <tr id='cat'>
  <tr><td bgcolor='#f1f1f1' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Login ID  &nbsp; &nbsp;
</font></td> <td bgcolor='#f1f1f1' align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='text' class='form-control' name='userid' ></font></td></tr>

<tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Password  
</font></td> <td bgcolor='#ffffff' align='center' style="padding-top:20px;padding-bottom:20px;"><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='form-control' name='password' ></font></td></tr>

<tr> <td bgcolor='#f1f1f1' colspan='2' align='center' style="padding-top:5px;padding-bottom:5px;"><font face='verdana, arial, helvetica' size='2' align='center'>  
<input type='submit' value='Submit' class="btn btn-primary"> <input type='reset' value='Reset' class="btn btn-danger">
</font></td> </tr>


<tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'> &nbsp;<a href='signup.php'>New Member Sign UP</a></font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' ><a href=forgot-password.php>
Forgot Password</a> ?</font></td></tr>

<tr> <td bgcolor='#f1f1f1' colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
&nbsp;</font></td> </tr>


</table></center></form>
<?Php
require "bottom.php";
?>
</center>




<?php include 'include/footer.php'; ?>