<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
    <meta charset="utf-8">
    <title>Nueva cuenta</title>
    <head>
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
                    <a class="nav-link active"  aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link"  href="#">Perfil
                    </a>
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
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" >Publicaciones</a>
                  </li>
                </ul>
               
                <form class="d-flex " >
                  <input class="form-control me-2" type="search" placeholder="Buscar amigo" aria-label="Buscar">
                  <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            
              </div>
            </div>
          </nav>
       <h1>Registro</h1> 
    </head>
    <body>
       
        <div class= "container card mb-3 " >

            <h2>Bienvenido <?php echo($_POST["nombre"])?>, para continuar es necesario subir una foto a tu perfil.</h2>
            <img src="https://image.flaticon.com/icons/png/512/17/17004.png" width="150" height="150" >
            <br>
           
        
        <form action= "cregistration.php" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <input type="hidden"  id="Name" name="Name" value= "<?php echo($_POST["nombre"])?>">
                </div>
                <div class="mb-3">
                    <input type="hidden"  id="unive" name= "unive" value= "<?php echo($_POST["uni"])?>" >
                </div>
                <div class="mb-3">    
                    <input type="hidden"  id="Date" name="Date" value= "<?php echo($_POST["fecha"])?>">
                </div>
                <div class="mb-3">
                <input type="hidden"  id="Email1" value= "<?php echo($_POST["email"])?>">
                </div>
                <div class="mb-3">
                <input type="hidden"  id="Password1"value= "<?php echo($_POST["contraseña"])?>" >
                </div>
                <input type="file" name="fotoperfil" id="fotoperfil" accept="image/png, image/jpg"/>
                <input type="submit" name="subir-imagen" value="Enviar imagen" />
                <br>
                <br>
              </form>
            </div>
    </body>

</html>