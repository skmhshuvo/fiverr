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
?>

<?php include 'include/header.php';?>

<?Php
// check the login details of the user and stop execution if not logged in
require "check.php";
///////Collect the form data /////
$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$old_password=$_POST['old_password'];
/////////////////////////

if(isset($todo) and $todo=="change-password"){
$status = "OK";
$msg="";

			
$count=$dbo->prepare("select password from plus_signup where userid=:userid");
$count->bindParam(":userid",$_SESSION['userid'],PDO::PARAM_STR, 15);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);


if($row->password<>md5($old_password)){
$msg=$msg."Your old password  is not matching as per our record.<BR>";
$status= "NOTOK";
}					

if ( strlen($password) < 3 or strlen($password) > 8 ){
$msg=$msg."Password must be more than 3 char legth and maximum 8 char lenght<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{ // if all validations are passed.
$password=md5($password); // Encrypt the password before storing
//if(mysql_query("update plus_signup set password='$password' where userid='$_SESSION[userid]'")){
$sql=$dbo->prepare("update plus_signup set password=:password where userid='$_SESSION[userid]'");
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
if($sql->execute()){
echo "<font face='Verdana' size='2' ><center>Thanks <br> Your password changed successfully. Please keep changing your password for better security</font></center>";
}else{echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to change password Contact Site Admin</font></center>";
} // end of if else if updation of password is successful
} // end of if else if status <>OK
} // end of if else todo
require "bottom.php";

?>
<center>
<br><br><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 

<?php include 'include/footer.php';?>