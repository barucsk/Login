<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user_name']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }


$pre_user_name = validate($_POST['user_name']);
$user_name = filter_var($pre_user_name,FILTER_SANITIZE_STRING);
$pre_pass = validate($_POST['password']);
$pass = filter_var($pre_pass,FILTER_SANITIZE_STRING);

if (empty($user_name)) {
    header("Location: index.php?error=User Name is required");
    exit();
}
else if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
}
else{
    $sql = "SELECT * FROM registered_users WHERE user_name='$user_name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['user_name'] === $user_name && password_verify($pass, $row['hash'])) {
            echo "Logged in!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['loggedin_time'] = time();
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
        exit();
    }
}
}
else{
    header("Location: index.php");
    exit();
}