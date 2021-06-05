<?php
session_start();



?>

<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
        <title>Perfil</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://lh3.googleusercontent.com/proxy/5UnwbzS6Kr99CKC-Z5qVUNluDJhZZh5cMx6A2k16X_kae6733Laa1cguEvtsk9ci2LRuQnZ3GkQyfL9stfL6a-lkcCN-HMRvP_jpWAJedeYOMgw" alt="" width="30" height="24">
                  </a>
                    <a class="navbar-brand" href="index.html">RedClouds</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-right: 57%">
                                <li class="nav-item">
                                    <a class="nav-link active"  aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link"  href="perfil.html">Perfil</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Amigos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" >Publicaciones</a>
                                </li>
                            </ul>
               
                    <form class="d-flex " >
                        <input class="form-control me-2" type="search" placeholder="Buscar amigo" aria-label="Buscar">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>
            
            </div>
            
            </nav>
            <h1>Perfil</h1> 
            <div class= "container " >
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Brad_Pitt_2019_by_Glenn_Francis.jpg/1200px-Brad_Pitt_2019_by_Glenn_Francis.jpg" width="150" height="200" >
            </div>
            <br>
            <div class= "container " >
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Brad Pitt</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">18/12/1963</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Harvard (Astro-Fisíca de Particulas)</label>
                </div>
          

    </body>
</html>