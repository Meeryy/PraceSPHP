
<?php 
require_once("./classes/User.php");
require_once(".classes/DBC.php");
include 'DBC.php';

$pwd = $_POST['password'];
$pwd_hashed = get_pwd_from_DBC($username);
  
session_start();
$_POST; //print_r() vypise udaje, key["username"] jmeno - value heslo
if(empty($_POST["name"]) || empty($_POST["password"])){
  header('Location: index.php');// redirect
  exit(); //lepsi pro scripty, lze i return
}
$user = new User(1, $_POST['name'], $_POST['password']);

echo $user;
$pwd_hashed = password_hash("password", PASSWORD_BCRYPT, []);

if (password_verify($pwd, $pwd_hashed)) {
  echo 'Location: index.php';
}
else {
  echo "Password incorrect.";
}


$name = $_POST['name'];


echo "You ar logged as $name"; 

$connection = DBC::getInstance()->getConnection();
