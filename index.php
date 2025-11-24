<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Concessionária</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            funcionários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionarios">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionarios">Listar</a></li>
          </ul>
        </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-clientes">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-clientes">Listar</a></li>
          </ul>
        </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-marca">Listar</a></li>
          </ul>
        </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelo">Listar</a></li>
          </ul>
        </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vendas  
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>    

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <?php
                        switch (@$_REQUEST['page']){
                            //funcionarios
                            case 'cadastrar-funcionarios':
                                include('cadastrar-funcionarios.php');
                                break;

                            case 'listar-funcionarios':
                                include('listar-funcionarios.php');
                                break;

                            case 'editar-funcionarios':
                                include('editar-funcionarios.php');
                                break;

                            case 'salvar-funcionarios':
                                include('salvar-funcionarios.php');
                                break;

                            //clientes
                            case 'cadastrar-clientes':
                                include('cadastrar-clientes.php');
                                break;

                            case 'listar-clientes':
                                include('listar-clientes.php');
                                break;

                            case 'editar-clientes':
                                include('editar-clientes.php');
                                break;

                            case 'salvar-clientes':
                                include('salvar-clientes.php');
                                break;
                            
                            //marcas
                            case 'cadastrar-marca':
                                include('cadastrar-marca.php');
                                break;

                            case 'listar-marca':
                                include('listar-marca.php');
                                break;

                            case 'editar-marca':
                                include('editar-marca.php');
                                break;

                            case 'salvar-marca':
                                include('salvar-marca.php');
                                break;

                            //modelos
                            case 'cadastrar-modelo':
                                include('cadastrar-modelo.php');
                                break;

                            case 'listar-modelo':
                                include('listar-modelo.php');
                                break;

                            case 'editar-modelo':
                                include('editar-modelo.php');
                                break;

                            case 'salvar-modelo':
                                include('salvar-modelo.php');
                                break;

                            //venda
                            case 'cadastrar-venda':
                                include('cadastrar-venda.php');
                                break;

                            case 'listar-venda':
                                include('listar-venda.php');
                                break;

                            case 'editar-venda':
                                include('editar-venda.php');
                                break;

                            case 'salvar-venda':
                                include('salvar-venda.php');
                                break;

                            default:
                                print "<h1>Bem-vindo ao sistema de concessionária</h1>";
                        }
                    ?>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
