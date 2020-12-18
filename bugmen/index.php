<?php
   include('session.php');
?>
<html">
   
   <head>
   
		<link rel="stylesheet" href="sidebar.css">
      <title>Welcome </title>
   </head>
   
   <body>
   
		<?php include 'sidebar.php' ?>
		<div class ="main">
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
	  <p>Bugmen Tracker</p>
	  
	  </div>
	  
		<div class="main">
		php stuff
			<?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if(!file_exists($page.".php")){
                include '404.html';
            }else{
            include $page.'.php';

            }
          ?>
		</div>
   </body>
   
</html>