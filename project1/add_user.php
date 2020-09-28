<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
 -->
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

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}




*{
	height:auto;
	overflow: hidden;
  padding:0px;
}
.btn1{
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

.btn{
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
    border-radius: 31px;
    border-image: 4px;
    background-color:#74de0b; 
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
	<h1 align="center" style="font-family: sans-serif;"> <p style="color: burlywood"> Create User</p> </h1><br><br>
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




  <div class="container" style="width: 50%;
    margin-left: 22%;background-color: darkslategray">
  <form action="add.php" method = "post" align="center" position='fixed' autocomplete="off">
  <div class="useradd">
    <div class="col-25">
      <label for="name">Name: </label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email: </label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email-id is..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="credit">Credits: </label>
    </div>
    <div class="col-75">
      <input type="text" id="credit" name="credit" placeholder="1-9999">
    </div>
    <!-- <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div> -->
  </div>
  <!-- <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div> -->
  <div class="" style="align-content: center;padding-top: 20px"> 
    <input class="btn1" type="submit" value="Submit" name="useradd" style="margin-right: 46%;background-color: steelblue">
     <a href="index.html" class="btn" style="margin-left: 60%;margin-top: -9%;border-radius: 4px; background-color: steelblue;text-decoration: none;padding-top: 11px 6px">Home page</a>
  </div>
  </form>
</div>

</div>
</body>
</html>