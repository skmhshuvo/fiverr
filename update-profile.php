<?Php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
include "include/session.php";
include "config.php";
//////////////////////////////


?>
<?php include 'include/header.php'; ?>

<?Php
// check the login details of the user and stop execution if not logged in
require "check.php";

// If member has logged in then below script will be execuated. 
// let us collect all data of the member 
$count=$dbo->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}

//Let us set the period button based on the data of the sex field
// You can see male button is checked if it is set to male
// else it is  set to female  
if($row->sex == "male"){
$ckb="<input type='radio' value=male checked name='sex' checked>Male 
<input type='radio' value=female  name='sex'>Female";}
else {$ckb="<input type='radio' value=male checked name='sex' >Male 
<input type='radio' value=female  name='sex' checked>Female";}

// One form with a hidden field is prepared with default values taken from field. 
echo "<br/><center><form action='update-profileck.php' method=post>
<input type=hidden name=todo value=update-profile>

<table border='0' cellspacing='0' cellpadding='0' align=center width='30%'>
 <tr bgcolor='#ffffff' > <td colspan='2' align='center'>
<font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Update Profile</b> 
</font></td> </tr>

<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Email</td>
<td  ><input type=text name=email value='$row->email'></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Name</td>
<td ><font face='Verdana' size='2'><input type=text name=name value='$row->name'></td></tr>

<tr bgcolor='#f1f1f1'><td >&nbsp;<font face='Verdana' size='2' >Sex</td>
<td ><font face='Verdana' size='2'>  $ckb</td></tr>
<tr bgcolor='#ffffff'><td align=center colspan=2><input type=submit value=Update class='button'></td></tr></center>


";


echo "</table>";
require "bottom.php";

?>

<?php include 'include/footer.php'; ?>