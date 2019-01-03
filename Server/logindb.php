
<?php

session_start();

$host="localhost";
$username="root";
$password="root123";
$db_name="ssn";
$tbl_name="login";
//$conn = mysqli_connect('$host','$username','$password','$db_name')or die("cannot connect");
$conn = mysqli_connect("localhost","root","root123","ssn") or die("Could not connect!!<br> Returned By MYSQL Server: ".mysqli_connect_error());

$myusername=$_POST['usr'];
$mypassword=$_POST['pwd'];
$myusername=stripslashes($myusername);
$mypassword=stripslashes($mypassword);
$myusername=mysqli_real_escape_string($conn, $myusername);
$mypassword=mysqli_real_escape_string($conn, $mypassword);

$_SESSION['myusername']=$myusername;
//$_SESSION['myusername']="abc";
/*


if (isset($_POST['usr']) && isset($_POST['pwd'])) //when form submitted
{
  if ($_POST['usr'] === login && $_POST['pwd'] === password)
  {
    $_SESSION['login'] = $_POST['use']; //write login to server storage
    echo"LOGIN SUCCESSFUL :) Welcome Lokesh";
    header('Location: logout.php');
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

*/








/*
$sql = mysql_query("SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");
*/
$sql="SELECT * FROM login WHERE name='$myusername' AND passwd='$mypassword'";
$result=mysqli_query($conn, $sql) or die("could not perform query");
$count=mysqli_num_rows($result);
if($count==1){

header('Location: logout.php');
}

else{
echo"Authentication Failure";
}

?>


