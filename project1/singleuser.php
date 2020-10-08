<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
    .topnav {
  background-color: #ccccb3;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 2px 4px;
  text-decoration: none;
  font-size: 13px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: grey;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: black;
}
body
{
  background-color: darkslategray;
  background-size: cover;
}
.btn{
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    outline: none;
    font-weight: normal;
    line-height: 1.42;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 31px;
    border-image: 4px;
    background-color:#74de0b; 
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
  </style>
</head>
<body>
  <h1 align="center" style="font-family: sans-serif;"> <p style="color: burlywood">User Details</p> </h1><br><br>
	 <!-- <div class="topnav">
  <a href="index.php"><h3>Home</h3></a>
   <a href="view.php"><h3>Transfer Credit</h3></a>
    <a href="viewuser.php"><h3>View Users</h3></a> 
   <a href="index.php"><h3>About</h3></a>
     <a href="index.php"><h3>Contact</h3></a>
</div> -->
<?php
$con =mysqli_connect("localhost","id14985521_bhargav","Annagirisai7013910008_","id14985521_project");
if(isset($_POST['details']))
{
	$name = $_POST['name'];
	$sql = "SELECT * FROM users WHERE name='$name'";
	$result = mysqli_query($con, $sql);
		  echo "<table border='2' style='border: 3px solid black;' align='center' width='50%'>
          <tr style='color: burlywood;'>
          <th> Name</th>
          <th>Email</th>
          <th>Credits</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) 
          {
            echo "<tr style='color: aqua'>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['credit']."</td>";
            }
          echo "</table>";
}

?>
<div>
  <a href="index.html" class="btn" style="margin-left: 44%;margin-top: 4%;border-radius: 5px; background-color: steelblue;text-decoration: none;">Home Page</a>
  
</div>
</body>
</html>
