<?php
session_start();
if(isset($_SESSION["user"])){
  header("Location:home.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
        <title>RedClouds</title>
    </head>
    <body>
        <br>
        <div class= "container">
        <br>
            <h1>Red social</h1>
            <br>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="registro.php"><button type="button" class="btn btn-primary" style="margin-right: 50;"style="background-color:blue ">Registrarse</button></a> 
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="iniciar.php"><button type="button" class="btn btn-primary">Iniciar sesión</button></a>
            </div>
        
        </div>
    </body>

</html>