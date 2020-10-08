<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <!--<meta name="HandheldFriendly" content="true">-->
  <title>Add user</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
 -->
   <?php
        include("connection.php");

        
        
        ?>
<style type="text/css">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
    margin-right:27vw;
  background-color: steelblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
    margin-left: 22%;
    background-color: darkslategray;
}

.col-25 {
  float: left;
  width: 13%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.amountText {
      width: 590px;
    height: 41px;
    border-radius: 4px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 728px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .buttons{
    align-content: center;
    padding-top: 20px;
    width:40vw;
}
button[type=submit] {
    /*width:27vw;*/
    margin:auto;
  background-color: steelblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.buttons a {
        padding: 11px;
    margin-left: 6%;
    margin-top: 5%;
    border-radius: 4px;
    background-color: steelblue;
    text-decoration: none;
    display: inline-block;
    padding:11px 16px;
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
    border-radius: 4px;
    border-image: 4px;
    background-color:steelblue; 
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
    
}
.btn1{
    
    margin-right: 46%;
    background-color: steelblue;
    display: inline-block;
    padding: 8px 16px;
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
    border-radius: 15px;
    border-image: 4px;
     
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
    
}

}

.buttons{
    align-content: center;
    padding-top: 20px;
}


*{
  height:auto;
  overflow: hidden;
  padding:0px;
}
.btn1{
    margin-right: 46%;
    background-color: steelblue;
    display: inline-block;
    padding: 8px 16px;
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
    border-radius: 15px;
    border-image: 4px;
    background-color:cornflowerblue; 
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
    
}

.btn2{
        padding: 11px;
    margin-left: 30%;
    margin-top: -9%;
    border-radius: 4px;
    background-color: steelblue;
    text-decoration: none;
    display: inline-block;
    padding:12px 16px;
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
    border-radius: 4px;
    border-image: 4px;
    background-color:steelblue; 
    color: white;
    font-weight: 600 !important;
    margin-right: 10px;
    font-size: 18px;
    
}
  .btndanger1{
  display: inline-block;
  border-radius: 4px;
  width: 120px;
  height: 30px;
  background-color: darkblue;
  font-size: 20px;
  background-color: lightgreen;
  padding: 0px;
}
.btndanger1:hover{
  background-color: skyblue;
  cursor: pointer;
}
/*#myTable{
  margin: 40px; 
  margin-left: 30%;
}*/
.myform{
  outline: auto;
  border-radius: 5px;
  padding:0px;
  width:37%;
  height: 37px;
  text-align: justify;
}
</style>
</head>
<body style="background-color: darkslategray;">
  <h1 align="center" style="font-family: sans-serif;"> <p style="color: burlywood"> Transfer</p> </h1><br><br>
  <!-- <div style="position: relative; top: 20px;" > -->
    <!-- <div class="container">
  <form width="auto" action="add.php" method = "post" align="center" position='fixed' autocomplete="off">
    <div class="useradd">
        <label for="name" style="margin-left: -6px;font-size: 20px;"> Name: </label> <input class="myform" type="text" style="font-size: 14px;font-style: oblique;" id="name" name="name" placeholder="Type your name here" required=""><br><br>
        <label for="email" style="font-size: 20px;">Email:</label> <input class="myform" type="text" style="font-size: 14px;font-style: oblique;" id="email" name="email" placeholder="Email" required=""><br><br>
        <label for="credit" style="margin-left: -12px;font-size: 20px;">Credits: </label> <input class="myform" type="text" id="credit" name="credit" style="font-size: 14px;font-style: oblique;" placeholder="Credits" required=""><br><br>
        <button class="btn1" type="submit" name="useradd">Create User</button>
        </div>
    </form>
  </div> -->




  <div class="container" >
    <form action="payment.php" method = "post" align="center" position='fixed' autocomplete="off">
                  <?php
                   $query="SELECT name FROM users";
                   $data=mysqli_query($conn,$query);
                    ?>
      <div class="useradd">
        <div class="col-25">
          <label for="name">Sender: </label>
        </div>
        <div class="col-75">
         <select class="form-control" name="from">
                          <option value="null">Not Selected</option>
                            <?php 
                              while($result= mysqli_fetch_array($data))
                              {
                               echo "<option value='" . $result['name']. "'>" . $result['name'] . "</option>";
                                
                              }
                              ?>
          </select>
        </div>
      </div>
                 <?php
                   $query="SELECT name FROM users";
                   $data=mysqli_query($conn,$query);
                                                
                    ?>
      <div class="row">
        <div class="col-25">
          <label for="email">Receiver: </label>
        </div>
        <div class="col-75">
          <select class="form-control" name="to">
                          <option value="null">Not Selected</option>
                          <?php 
                            while($result= mysqli_fetch_array($data))
                            {
                             echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
                              
                            }
                            ?>
                      </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="credit">Credits: </label>
        </div>
        <div class="col-75">
          <input class="form-control amountText" type="number" name="amount" min=1 autocomplete="off">
        </div>
        
      </div>
      
      <div class="buttons" > 
        <button type="submit" class="btn1" name="submit" value="submit" style="background-color:steelblue">Transfer</button> 
        <!-- <input class="btn1" type="submit" value="Submit" name="useradd" > -->
         <a href="index.html" class="btn2" >Home</a>
      </div>
    </form>
  
</div>

</div>
</body>
</html>
