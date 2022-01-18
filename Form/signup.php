<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
<title> BELLI RESTRAUNT SIGNUP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
     <div class="col-sm-4">
      <img src="" alt="BELLI" class="logo img-fluid"> 
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row">
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($rname)<3){ // Minimum 
      $error[] = 'Please enter your Restraunt Name using 3 charaters atleast.';
        }
if(strlen($rname)>20){  // Max 
      $error[] = 'Restraunt Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $rname)){
            $error[] = 'Invalid Entry Restraunt Name! Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($address)<6){ // Minimum 
      $error[] = 'Please enter Address using 6 charaters atleast.';
        }
if(strlen($address)>50){  // Max 
      $error[] = 'Last Name: Max length 50 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $address)){
            $error[] = 'Invalid Entry Address! Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
      if(strlen($phone)<10){ // Change Minimum Lenghth   
            $error[] = 'Please enter Username using 10 digits atleast.';
        }
  if(strlen($phone)>12){ // Change Max Length 
            $error[] = 'Phone Number: Max length 12 Digits Not allowed';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $phone)){
            $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
        }  
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from users where ( email='$email');";
      $res=mysqli_query($dbc,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     
       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
              $date=date('Y-m-d');
            $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);
            
           $result = mysqli_query($dbc,"INSERT into users values('','$rname','$address','$phone','$email','$password','$date')");

           if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

		 <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
		</div>
		<div class="col-sm-4">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div>
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST">
  <div class="form-group">
  	
        <label class="label_txt">Resturant Name</label>
    <input type="text" class="form-control" name="rname" value="<?php if(isset($error)){ echo $_POST['rname'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Address </label>
    <input type="text" class="form-control" name="address" value="<?php if(isset($error)){ echo $_POST['address'];}?>" required="">
  </div>
 
<div class="form-group">
    <label class="label_txt">Phone Number </label>
    <input type="tel" class="form-control" name="phone" value="<?php if(isset($error)){ echo $_POST['phone'];}?>" required="">
  </div>

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
    <input type="password" name="passwordConfirm" class="form-control" required="">
  </div>
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button>
   <p>Have an account?  <a href="login.php">Log in</a> </p>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>