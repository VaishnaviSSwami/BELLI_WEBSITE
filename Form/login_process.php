<?php 
require_once("config.php"); 
if(isset($_POST['sublogin'])) { 
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $query = "select * from registration where ( email = '$email' and password='$password')";
    $res = mysqli_query($dbc,$query);
    $count = mysqli_num_rows($res);
    if($count  != 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION["login_sess"]="1"; 
        $_SESSION["login_email"]= $row['email'];
        header("location:dash_board.html");
    } else { 
        header("location:login.php?loginerror=".$email);
    }
} else {
  header("location:login.php?loginerror=".$email);
}
?>