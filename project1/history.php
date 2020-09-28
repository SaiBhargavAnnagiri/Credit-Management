<!DOCTYPE html>
<html>
<head>
  <title>Transaction History</title>
  <style type="text/css">
*{
  
  height: auto;
  overflow: auto;
}
body{
  background-color: darkslategray;
}


.cap{
  font-size: 28px;
  border:none;
  color: black; 
  
  border-radius: 5px;
 text-decoration: none;

}
.cent{
  text-align: center;
  width: 100%;
  height: auto;
  overflow-y: hidden;
  /*justify-content: center;*/
}
.cap:hover{
  background-color: #3678d6;
  color:  lightblue;
}
.test{
  
  border: double;
  height: 60px;
  width: 170px;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


  </style>
</head>
<body>
<h1 align="center" style="font-family: sans-serif;margin-right: 21%"> <p style="color: burlywood"> History</p> </h1><br><br>
</body>
</html>



<link rel="stylesheet" href="style.css">







 <div align="
  center" style="color: aqua">
    <?php
$con =mysqli_connect("localhost","root","","project");
$sql = "SELECT * FROM history";  
$result = mysqli_query($con, $sql);
echo " <table border='2' style='border: 3px solid black;margin-left:17%' align='center' width='50%;'>
          <tr style='color: burlywood;'>
          <th style='width: 15%'>Sender</th>
          <th style='width: 25%'>Receiver</th>
          <th style='width: 25%'>Amount</th>

          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['sender']."</td>";
            echo "<td>".$row['receiver']."</td>";
            echo "<td>".$row['credit_transfer']."</td>";
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
              <button class="btn" style="margin-left: 40%;margin-top: 5%;background-color: steelblue;color: black"> <a href="index.html" class="cap"> Home   </a></button>

        