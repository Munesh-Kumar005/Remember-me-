<?php
  session_start();
    
if (!isset( $_SESSION['IS_LOGIN'])) {
	header('location:index.php');
}

?>

<h1>Welcome Home</h1>
<a href="logout.php">Logout</a>