

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<<?php 

include("connection.php");
        if(isset($_POST['useradd']))
        {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $credit=$_POST['credit'];
        if($_POST['name'] === 'null' || $_POST['email'] === 'null' ) 
        {
            
            echo '<script>alert("cannot add")</script>';
           
        } 
        else{
        $query="INSERT into users(name,email,credit) values
        ('$name','$email','$credit')";
        $result=mysqli_query($conn,$query);
        echo"<script type='text/javascript'>alert('user added');window.location.href='viewuser.php'</script>";
        }
    }



 ?>
 </body>
 </html>