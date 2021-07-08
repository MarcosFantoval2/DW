<?php

session_start();
$ruta=$_SERVER["REQUEST_URI"];
$ruta= explode("apiv1.php/",$ruta)[1];
$ruta= explode("/",$ruta);
require "vendor/autoload.php";
session_start();
$client = new MongoDB\Client("mongodb://localhost:27017");

header("Content-Type:application/json"); 
switch($ruta[0]){

case "iniciar":
    $collection = $client->redclouds->usuarios;
    $user = $collection->findOne(["email"=>$_POST["email"], "password"=>$_POST["password"]]);
    print_r($_POST);
    #foreach($user as $entry){
     #   print_r($entry);}
    $esta=false; 
    if(isset($user->email)){
        $esta=true;
       # $_SESSION["user"]=json_decode(MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($user)));
        $_SESSION["user"]=$user;
        $_SESSION["userid"]=(string)$user["_id"]; 
        echo("hola");
    }
    if ($esta){
        echo("hola2");
        echo json_encode(Array(
            "status"=>$esta,
            "userdata"=>$user
            
        ));
    }else{
        echo("hola3");
        echo json_encode(Array("status"=>$user,"bd"=>$collection));
    }
    break;
case "logout":
    session_destroy();
    break; 
case "user":
    if (isset($ruta[1])){
        $collection = $client->redclouds->usuarios;
        $user = $collection->findOne([
            "_id"=> new MongoDB\BSON\ObjectId($ruta[1]),            
            ]);
        echo json_encode($user);
    }else{
        echo json_encode($_SESSION["user"]);
    }
    default:
        echo json_encode(Array("API version"=>"1"));
    break;

    

case "post":
    if (isset($_SESSION["user"])){ 
        switch($ruta[1]){
            case "create":
                $collectionPost = $client->redclouds->posts;
                $data = [
                    "username"=>$_SESSION["user"]->nombre,
                    "userid"=>$_SESSION["user"]->_id{"$oid"},
                    "texto"=>$_POST["texto"],
                    "fechahora"=>time(),
                    "likes"=>0
                ];
                $insertOneResult=$collectionPost->insertOne($data);
                echo json_encode($insertOneResult);
                break;
            case "like":
                $collectionPost = $client->redclouds->posts;
                $resultupdateOne= $collectionPost->updateOne(
                    ["_id" => new MongoDB\BSON\ObjectId($ruta[2])],
                    ['$inc' => ["likes" => 1]]
                );
                echo json_encode($resultupdateOne->getModifiedCount());
                break; 
            default:
                $collectionPost=$client->redclouds->posts;
                $cursor= $collectionPost->find([],["sort" =>["fechahora"=>-1]]);
                echo json_encode(iterator_to_array($cursor));
                echo("default");
                break;
        }
        break;
    }else{
        echo json_encode(Array("status"=>"not logged"));
    }
    break;


}

?>