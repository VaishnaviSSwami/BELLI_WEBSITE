<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM registration WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$phone = $res['phone']; 
$rname = $res['rname'];   
$address = $res['address'];  
$email = $res['email'];  
}
 ?> 
<html>
<head>
    <title> My Account - BELLI REGISTRATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <img src="belli.png" alt="BELLI" class="logo img-fluid"> <br> 
     <p><a href="logout.php"><span style="color:red; float: right;">Logout</span> </a></p>
          <p> Welcome! <span style="color:#33CC00"><?php echo $rname; ?></span> </p>
          <table class="table">
          <tr>
              <th>Restraunt's Name: </th>
              <td><?php echo $rname; ?></td>
          </tr>
          <tr>
              <th>Address </th>
              <td><?php echo $address; ?></td>
          </tr>
          <tr>
              <th>Phone Number</th>
              <td><?php echo $phone; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>