<?php
$con = require __DIR__ ."/database_con.php";
$ID=$_REQUEST['ID'];
$query = "SELECT * from feedback where ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
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
<body>
    <div class="top">
  <div class="bar black card">
      <a class="padding-large button hover-red hide-small right" href="logout.php">LOG OUT</a>
  </div>
  </div>

<br><br><br>
<div class="card-4 container content padding-32 light-grey">
<div class="form">
<div class="container black">

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID=$_REQUEST['ID'];
$Name =$_REQUEST['Name'];
$Message =$_REQUEST['Message'];
$update="update feedback set 
Name='".$Name."', Message='".$Message."' where ID='".$ID."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='feedbackmod.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<p><input class="input" type="text" name="Name" placeholder="Enter Name" 
required value="<?php echo $row['Name'];?>" /></p>
<p><input class="input" type="text" name="Message" placeholder="Enter Message" 
required value="<?php echo $row['Message'];?>" /></p>
<button class="button red section left" type="submit">UPDATE</button>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>