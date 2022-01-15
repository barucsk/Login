<?php
include "db_conn.php";

$user="admin";
$pass=password_hash("password",PASSWORD_DEFAULT);

$sql = "INSERT INTO registered_users(user_name, hash) VALUES ('$user','$pass')";

if (mysqli_query($conn, $sql)) {
    echo("admin creado");
}
else{
    echo("error");
    exit();
}