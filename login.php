
<?php 
require_once("./classes/User.php");
require_once(".classes/DBC.php");
include 'DBC.php';
session_start();
$_POST; //print_r() vypise udaje, key["username"] jmeno - value heslo
if(empty($_POST["name"]) || empty($_POST["password"])){
  header('Location: index.php');// redirect
  exit(); //lepsi pro scripty, lze i return
}
$user = new User(1, $_POST['name'], $_POST['password']);

echo $user;

$name = $_POST['name'];
echo "You ar logged as $name"; 

$connection = DBC::getInstance()->getConnection();
