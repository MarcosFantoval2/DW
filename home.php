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
                   <a class="navbar-brand" href="index.php">RedClouds</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-right: 57%">
                               <li class="nav-item">
                                   <a class="nav-link active"  aria-current="page" href="home.php">Home</a>
                               </li>
                               <li class="nav-item" >
                                   <a class="nav-link"  href="perfil.php">Perfil</a>
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
    </head>

    <body>
    <h1>Muro</h1> 

<div class="container-md border border-primary mt-3">
    <div class="row">
        <div class="col">
            <form action="posteao.php" method="POST">
                <br>
                <label for="exampleInputPassword1" class="form-label">¿Que esta pensando?</label>
            <input class="form-control" type="text" name="texto" id="texto" placeholder="Escribe tu publicación">
        <br>
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>
        </form></div>
    </div>
</div>
<div id="" class="container-md border border-primary mt-3">
    <div class="row">
        <div class="col-sm-auto"> 
            <br>
            <img src="imagen.png" height="150px">
            <br>
        </div>
        <div class="col">
            <div class="row left">
                <br>
                <p class="text-muted"> quien escribio la fecha y hora</p>
                <br>
            </div>
            <div class="row">
                <p class="font-weight-bold">el post en si</p>
            </div>
        </div>
        <div class="row">
        <div class="col-sm">
            <br>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Me gusta</a>
        </div>
        </div>
    </div>
    <div class="row">
        <br>
        <label for="exampleInputPassword1" class="form-label">Escribe un comentario</label>
        <input class="form-control" type="text" name="texto" id="texto2" placeholder="Comentario">
        <br>
    </div>
    <div class="col-sm">
        <button type="submit" class="btn btn-primary">Publicar</button>
    </div>
</div>

    </body>
  
</html>
