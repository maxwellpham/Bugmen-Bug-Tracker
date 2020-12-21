<?php
   include('DBconfig.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $_SESSION['login_user'];
   
   //Code below redirects to login if you are not authenticated, not needed. We want to be able to add bugs part here since you are logged in
   
   if(!isset($_SESSION['login_user'])){
      header("location:logout.php");
      die();
   }
?>