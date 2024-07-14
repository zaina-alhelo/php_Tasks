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
 <!-- <?php
// session_start();


// if (!isset($_SESSION['tasks'])) {
//     $_SESSION['tasks'] = [];
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task']) && !empty($_POST['task'])) {
//     $newTask = htmlspecialchars($_POST['task']);
//     $_SESSION['tasks'][] = $newTask;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
//     $index = $_POST['delete'];
//     if (isset($_SESSION['tasks'][$index])) {
//         unset($_SESSION['tasks'][$index]);
//         $_SESSION['tasks'] = array_values($_SESSION['tasks']); 
//     }
// }
?> -->