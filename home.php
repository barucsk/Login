<?php 

session_start();
$time_active=time()-$_SESSION['loggedin_time'];
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     if($time_active<3600){
          $_SESSION['loggedin_time']=time();
 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
     <?php
          echo($_SESSION['loggedin_time']);
     ?>
     <a href="logout.php">Logout</a>

</body>

</html>

<?php 
     }else{
          session_unset();

          session_destroy();

          header("Location: index.php");  
     }
}else{

     header("Location: index.php");

     exit();

}

 ?>