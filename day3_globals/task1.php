<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo "<h2>POST Method</h2> <br>";
    echo "Email :".htmlspecialchars($email);
    echo "<br><br>";
    echo "Password :".htmlspecialchars($password);
    echo "<br><br>";

}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
       $email=$_GET['email'];
    $password=$_GET['password'];
    echo "<h2>GET Method</h2> <br>";
    echo "Email :".htmlspecialchars($email);
    echo "<br><br>";
    echo "Password :".htmlspecialchars($password);
    echo "<br><br>";

}