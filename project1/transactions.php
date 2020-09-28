<!Doctype html>
<html>

<head>
    <title>Users-page</title>
    <link rel="icon" type="image/png" href="transfer1.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php
        include("connection.php");

        
        
        ?>
        
        <style type="text/css">



          body{
      background-image: 
      url("");
      background-color: darkslategray;
      background-height: 1%;
      background-width: 1%;
      margin-left: 60px

}
 .list-group{
  width: auto;
  height: auto;
 }

 .container{
  padding: auto;
  width: auto;
  height: 100%;
 }

</style>


</head>
<body>
  <h1 align="center" style="font-family: sans-serif;margin-right: 21%;font-size: 140%"> <p style="color: burlywood"> Transfer</p> </h1>
    <?php
   $query="SELECT * FROM users";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);

    if($total !=0)
  { 
?>
    <div class="container">
        <!-- <div class="list-group">
            <?php
    while($result =mysqli_fetch_assoc($data))
    {
     ?>
            <a class="list-group-item list-group-item-action flex-column align-items-start"
                           href='user_details.php?id=<?php echo $result['id']; ?>'>
                <div class="chat_img"> <img src="profile.jpg" alt="chat_img"> </div>
                <?php echo $result['name'];}
    }
     else
    {
    echo"No Record Found";
    }
    ?>
            </a>
        </div> -->
        <?php
   if (isset($_GET["id"])) { $id  = $_GET["id"]; } else { $id=0; };
   $data=mysqli_query($conn,"SELECT * FROM users WHERE id=$id ");
   $total=mysqli_num_rows($data);
   $result =mysqli_fetch_array($data);
?>

       <!--  <div class="col-sm-6">
            <div class="panel-heading">
                <h3 class="panel-title">User Information :</h3>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-user-information">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td>
                                   <?php $val = isset($result['name']) ? $result['name'] : 0;
                     echo $val;?>

                            </td>
                        </tr>
                        <tr>
                            <td>Account ID:</td>
                            <td>
                                <?php $val = isset($result['id']) ? $result['id'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <?php $val = isset($result['email']) ? $result['email'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Credits</td>
                            <td>
                <?php $val = isset($result['credit']) ? $result['credit'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->

            
            <br>
            <form class="form-group" action="payment.php" method="post">
                <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
    ?>
                <div class="col-sm-6">
                    <label for="from" style="margin-left: 38%">Select User From:</label>
                    <select class="form-control" style="width: 50%;height: 34px;margin-top: -6%;margin-left: 70%" name="from">
                        <option value="null">Not Selected</option>
                <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name']. "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>

            <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
                                
    ?>
                <div class="col-sm-6 no-gutter">
                    <label for="to" style="margin-left: -62%;margin-top: 61px">Select User To:</label>
                    <select class="form-control" style="width: 50%;height: 34px;margin-top:-6% ;margin-left: -238px"   name="to">
                        <option value="null">Not Selected</option>
                        <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="amount" style="margin-left: 54%;margin-top: 20px">Credits:</label>
                    <input class="form-control" type="number" name="amount" min=1 autocomplete="off" style="width: 35%;height: 21px;margin-left:70% ;margin-top: -30px">
                </div>
                <br>
                      
                </div>
                <div class="col-sm-6 nopadding">
                    <br>
                    <div class="buttons" style="margin-left: 200px">
                        <button type="submit" class="btn" name="submit" value="submit" style="background-color:steelblue">Transfer credits</button>
                       <!--  <a href="history.php " class="btn">Transcations List</a> -->
                        <a href="index.html" class="btn" style="margin-left: 25%;background-color: steelblue;text-decoration: none;">Home Page</a>
                    </div>
                    </div>  
               
            </form>
       <!-- <div >
          <a href="index.html"><button class="backk">Back</button></a>

       </div> -->



    </div>
 
</body>

</html>
