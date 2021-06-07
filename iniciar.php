<html>
    <title>RedClouds</title>
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
       <h1>Inicio de sesión</h1> 
    </head>
    <body>
        
        <div class= "container bg-dark text-white rounded mx-auto d-block" >
            <form action="checklogin.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nombre de usuario</label>
                    <input name="email" type="name" class="form-control" id="email" aria-describedby="namelHelp">
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button></a>
                <br>
            </form>
        
        </div>
    </body>
