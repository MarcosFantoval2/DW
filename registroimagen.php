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

            <h2>Bienvenido Brad, para continuar es necesario subir una foto a tu perfil.</h2>
            <img src="https://image.flaticon.com/icons/png/512/17/17004.png" width="150" height="150" >
            <br>
            <form name="subida-imagenes" action= "cregistration.php" method="POST" enctype="multipart/formdata" >
                <input type="file" name="imagen1" />
                <input type="submit" name="subir-imagen" value="Enviar imagen" />
                <br>
                <br>
                <button type="button" class="btn btn-primary">Terminar</button></a>
            </form>
        </div>
        <form method="POST" action="finregistroimagen.php">
                <div class="mb-3">
                    
                    <input type="hidden" class="form-control" id="exampleInputName"  value= "<?php echo($_POST[nombre])?>">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Colegio/Universidad</label>
                    <input type="name" class="form-control" id="exampleInputName1" >
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="exampleInputDate">
                    
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email de acceso</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- Aquí puedes escribir tu comentario <div id="emailHelp" class="form-text"></div> -->
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button></a>
                <br>
            </form>
    </body>

</html>