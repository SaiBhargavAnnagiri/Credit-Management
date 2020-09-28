<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
.btn{
    display: inline-block;
    padding: 0px 9px;
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
    border-radius: 3px;
    border-image: 4px;
    background-color:#74de0b; 
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
    
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

  </style>
</head>
<body  style="margin-right: 16%">
  <!-- <div class="topnav">
  <a href="index.php"><h3>Home</h3></a>
   <a href="view.php"><h3>Transfer Credit</h3></a>
   <a href="index.php"><h3>About</h3></a>
     <a href="index.php"><h3>Contact</h3></a>
</div> -->
  
  <strong><h1 align="center" style="color: burlywood;">Users Details:</h1></strong>
  <div align="
  center" style="color: aqua">
    <?php
$con =mysqli_connect("localhost","root","","project");
$sql = "SELECT * FROM users";  
$result = mysqli_query($con, $sql);
echo "<table border='2' style='border: 3px solid black;' align='center' width='50%'>
          <tr style='color: burlywood;'>
          <th style='width: 15%'>ID</th>
          <th style='width: 25%'>NAME</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
?>
  </div>
  <div align="center">
    <br>
   <form action="singleuser.php" method = "POST" style="margin-left: 5%">
        <label><strong style="font-size: 145%;">View Details:</strong></label>
    <select name="name" style="width: 15%">
                      <option>Select</option>
                        <?php
                        $con =mysqli_connect("localhost","root","","project");
            $sql = "SELECT * FROM users";  
            $result = mysqli_query($con, $sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                            }

                        ?>

                </select>
                <input type="submit" name="details" style="width: 6%;background-color: steelblue;" required="details">
                 <a href="index.html" class="btn" style="background-color: steelblue;text-decoration: none;color: black;margin-left: 5%">Home</a>
                    
    </form>
  </div>
</body>
</html>