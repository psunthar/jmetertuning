<?php

  // Inialize session
  session_start();
unset($_SESSION['myusername']);
 echo "<script>alert('Loged out Successfully');</script>";
 echo "<noscript>Loged out Successfully</noscript>";

// Delete certain session
  
  // Delete all session variables
  // session_destroy();

 // Jump to login page
// header('Location: login.html');

  ?>
