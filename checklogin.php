<?php
$usuarios = Array("hola@hola.com" => 'hola', "hola2@hola.com" => '1234');
$esta=false;
foreach($usuarios as $email =>$pass){
    if ($email == $_POST['email'] && $pass == $_POST['password']){
        $esta = true;
    }
}
if ($esta){
    $_SESSION["email"]=$_POST["email"];
    header("Location:perfil.html");
}else{
    header("Location:iniciar.html?error=1");
}
?>