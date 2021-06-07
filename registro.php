<html>
    <title>Nueva cuenta</title>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
        
        <div class= "container bg-dark text-white rounded mx-auto d-block" >
            <form method="POST" action="registroimagen.php">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nombre completo</label>
                    <input type="name" name ="nombre" class="form-control" id="nombre" aria-describedby="namelHelp">
                    <div id="emailHelp" class="form-text">Como minimo debe de estar el primer nombre y apellido.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Colegio/Universidad</label>
                    <input type="name" name= "uni"  class="form-control" id="uni" >
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" id ="fecha" name ="fecha"class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha" name ="fecha">
                    
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email de acceso</label>
                <input type="email" name ="email"class="form-control" id="email" aria-describedby="emailHelp">
                <!-- Aquí puedes escribir tu comentario <div id="emailHelp" class="form-text"></div> -->
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" name ="contraseña" id="contraseña" class="form-label">Password</label>
                <input type="password" class="form-control" id="contraseña" name ="contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button></a>
                <br>
            </form>
        
        </div>
    </body>

</html>