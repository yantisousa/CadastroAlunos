<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

    .card-body {
        width: 400px;
        justify-content: center;
        align-items: center;
    }
    .card {
        width: 500px;
        justify-content: center;
        align-items: center;
        position: relative;
        left: 34%;
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('alunos.create')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <section>
      
        <div class="card">
            <h3>Cadastro do Aluno</h3>
            <div class="card-body">
                <form action="{{route('alunos.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Nome Completo: </label>
                      <input type="text" class="form-control" name="nome" id="exampleInputEmail1" required aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Obrigatório</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" >Data de Nascimento: </label>
                      <input type="date" class="form-control" id="exampleInputPassword1" name="data" required>
                    </div>
                    
                   
                
            </div>
          </div>
          
     
      
        <div class="card">
        
            <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" > Titulo do Livro: </label>
                      <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" required aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Obrigatório</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" >Ano de Lançamento: </label>
                      <input type="number" class="form-control" id="exampleInputPassword1" name="ano" required>
                    </div>
                    
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>
                    <a class="btn btn-light" href="{{route('alunos.index')}}">Ver Dados</a>
                </form>
            </div>
          </div>
          
      </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>