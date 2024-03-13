<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

} else if(empty($_POST["name"]) || empty($_POST["password"])){
    header('Location: index.php');// redirect
    exit(); //lepsi pro scripty, lze i return
  }
  $user = new User(1, $_POST['name'], $_POST['password']);

//dbs code