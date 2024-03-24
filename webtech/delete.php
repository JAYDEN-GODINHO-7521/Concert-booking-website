<?php
$mysqli = require __DIR__ ."/database_con.php";
$ID=$_REQUEST['ID'];
$query = "DELETE FROM feedback WHERE ID=$ID;";
$result = mysqli_query($mysqli,$query) or die ( mysqli_error($mysqli));
header("Location: feedbackmod.php"); 
exit();
?>