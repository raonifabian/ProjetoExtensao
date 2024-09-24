<?php 

    session_start();//inicia a sessao na pagina

    include "erros.php";//inclui o arquivo de erros

    require_once "conexao.php";//solicita o arquivo de conexão com o banco de dados

?>

<!doctype html>
<html lang="pr-BR">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--Link Icones-->
    <script src="https://kit.fontawesome.com/1758c2510a.js" crossorigin="anonymous"></script>
    
    <!--Link Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    
    <!--Link  Javascript-->
    <script type="text/javascript" src="js/scripts.js"></script>
    
    <!--Link Css-->
    <link rel="stylesheet" href="css/estilo.css">

    <title>Projeto de Extensão</title>

  </head>
  <body>

  <!--Inicio do Header/Cabeçalho-->
  <header id="cabecalho" class="sticky-top">
        <nav id="barra-navegacao" class="navbar navbar-expand-lg navbar-light">
            <div class="container p-2">
                
                <a id="logo" class="navbar-brand ">
                    <img src="imgs/logo.png" alt="Logo do Istituto Federal de São Paulo" >
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#barra-navegacao-id">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="barra-navegacao-id">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#cabecalho" class="text-light nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#cursos" class="text-light nav-link">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sobreprojeto" class="text-light nav-link">Sobre</a>
                        </li>
                        <li id="btn-criarconta" class="nav-item">
                            <a class="btn btn-primary" href="cadastro.php" class="text-light nav-link">Registrar</a>
                        </li>
                        <li id="btn-entrar" class="nav-item ">
                            <a class="btn btn-secondary" href="login.php" class="text-light nav-link">Entrar</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header> <!--Fim do Header/Cabeçalho-->

    <main>
        
        <!--Inicio da section form cadastro -->
        <section id="cadastro" class="background-color-primary w-100">
        
            <div id="bloco-cadastro" class="container p-4 text-center my-0 mx-auto">

                <form name="login" method="POST" action="login_func.php" enctype="multipart/form-data"> 
                    <label id="login">CPF: </label>
                    <input id="login" name="login" type="text"><br>
                    <label id="senha">Senha: </label>
                    <input id="senha" name="loginSenha" type="text"><br>
                    <input id="botaoEnviar" type="submit" name="entrar" value="Login">
                </form>

            </div>

        </section> <!--Fim da section form cadastro-->

    </main>

    <footer>
        <div id="fundo-flex-footer" class="text-center w-100">
            <p><i class="fa-brands fa-instagram"></i> EducaTech</p>
            
            <p>© 2024 Educatech. Todos os direitos reservados.</p>
        </div>
    </footer>
    

    <!--Link Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>