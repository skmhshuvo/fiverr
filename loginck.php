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
include "config.php"; // database connection details stored here
//////////////////////////////

$userid=$_POST['userid'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Demo Login script of plus_signup of plus2net.com</title>
</head>

<body>
<?Php
//$password=md5($password); // Encrypt the password before comparing
//// Checking userid and password //////
$msg='';
$status='OK';
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."User id should be =3 or more than 3 char length<BR>";
$status= "NOTOK";}					
if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 char legth<BR>";
$status= "NOTOK";}					

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
exit;
}

//////////////////////

$count=$dbo->prepare("select password,mem_id,userid from plus_signup where userid=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR);
if($count->execute()){
$no=$count->rowCount();
if($no <> 1 ) {
$msg=" Userid does not exist please try again ... ";
}else { 
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->password==md5($password)){
echo " Inside ";
// Start session n redirect to last page
$_SESSION['id']=session_id();
$_SESSION['userid']=$row->userid;
$_SESSION['mem_id']=$row->mem_id;
//echo " Inside session  ". $_SESSION['userid'];
$msg=" welcome $_SESSION[userid] loging successfully , please wait ... ";
echo $msg;
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='welcome.php';
//-->
</script>
";

} 
else
{
$msg = " Login failed, tray again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
} // end of if else for matching password
} // end of if elase for matching number of records <>1 
}else{
$msg = " Login failed, tray again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
} // 
echo $msg;
?>
<center>


<br><br><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 

</body>

</html>
