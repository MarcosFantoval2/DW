
<?php
/*
$usuarios = Array("hola@hola.com" => 'hola', "hola2@hola.com" => '1234');
$esta=false;
foreach($usuarios as $email =>$pass){
    if ($email == $_POST['email'] && $pass == $_POST['password']){
        $esta = true;
    }
}
if ($esta){
    $_SESSION["email"]=$_POST["email"];
    header("Location:perfil.php");
}else{
    header("Location:iniciar.php?error=1");
}*/
?>
<?php
require 'vendor/autoload.php';
session_start();
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->redclouds->usuarios;
$user = $collection->findOne(["email"=>$_POST["email"], "password"=>$_POST["password"]]);
$esta=false; 
if(isset($user->email) ){
    $esta=true;
    $_SESSION["user"]=$user;

}
if ($esta){
    print_r($user);
  #  header("Location:home.php");
}else{
 #   header("Location:iniciar.php?error=1");
}
?>