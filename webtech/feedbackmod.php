<!DOCTYPE html>
<html lang="en">
<head>
<title>login/signup</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="2.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body><div class="top">
  <div class="bar black card">
      <a class="padding-large button hover-red hide-small right" href="logout.php">LOG OUT</a>
  </div>
  </div>


<br><br>
<div class="card-4 container content padding-32 light-grey">
<div class="form">
<div class="container black">
  <h2>Feedback</h2>
</div>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Message</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$mysqli = require __DIR__ ."/database_con.php";
$sel_query="Select * from feedback ORDER BY ID desc;";
$result = mysqli_query($mysqli,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["ID"]; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["Message"]; ?></td>
<td align="center">
<a href="edit.php?ID=<?php echo $row["ID"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?ID=<?php echo $row["ID"]; ?>">Delete</a>
</td>
</tr>
<?php  } ?>
</tbody>
</table>


</div>
</div>






</body>
</html>