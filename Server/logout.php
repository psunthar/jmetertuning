<?php
/*
https://stackoverflow.com/questions/21396905/create-login-and-logout-session-in-php-and-database
*/
// Inialize session
session_start();

/*// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['myusername'])) {
header('Location: logindb.php');
}
*/

?>
<html>

<head>
<title>Secured Page</title>
</head>

<body>

<center><p> LOGIN SUCCESSFUL :) Welcome
<b><?php
//echo ' hiiiiiiiii '; 
echo $_SESSION['myusername']; 
?></p></center>

<center><p><a href="logoutdb.php"><button>Logout</button></a></p></center>

</body>

</html>
