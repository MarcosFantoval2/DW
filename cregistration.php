<?php 
$target_dir = "images";
$target_file = $target_dir.uniqid() .".png";
$uploadOK=1;
$check=getimagesize($_FILES["fotoperfil"]["tmp_name"]);

if ($check!=false){
    $uploadOK=1;
}   
else{
    $uploadOK=0;
    die("Error: el archivo no es una foto");
}

if (move_uploaded_file($_FILES["fotoperfil"]["tmp_name"], $target_file)){
    echo "El archivo". htmlspecialchars(basename( $_FILES["fileToUpload"]["name"]))."fue cargado.";
}
else{
    echo"Problema en cargar el archivo";
}
?>