<?php 

    session_start(); //inicia a sessao na pagina
    require_once "conexao.php"; //solicita o arquivo de conexão com o banco de dados


    $login = mysqli_real_escape_string($conn, $_POST['login']); //recebe o login do formulario e impede SQL injection
    $senha = mysqli_real_escape_string($conn, md5($_POST['loginSenha'])); //recebe a senha do formulario e impede SQL injection

    //md5 faz a função de criptografar a senha no padrao hash md5

    //echo $login;
    //echo $senha;


    //verifica se o botao login foi pressionado
    if(isset($_POST['entrar'])){
        if(empty($login)){//verifica se a variavel login recebeu algum valor do formulario
            echo "preencha o login";
        }elseif(empty($senha)){//verifica se a variavel senha recebeu algum valor do formulario
            echo "preencha a senha";
        }

        //funcao para fazer uma solicitação de busca ao bando de dados procurando as correspondencias de senha e login
        $verifica = mysqli_query($conn, "SELECT * FROM cadaluno WHERE cpf = '$login' AND senha = '$senha' LIMIT 1");
        //utiliza a funcao de busca para permitir acesso as informações da linha localizada
        $linha_user = mysqli_fetch_assoc($verifica);
        
        if(mysqli_num_rows($verifica) <=0){//confirma se a verificação retornou algum resultado (o limite é 1)
            echo "login ou senha incorretos";
        }else{//caso tenha 1 resultado, é atribuido a sessao da pagina o id e nome de usuario localizado
            $_SESSION['id'] = $linha_user['id'];
            $_SESSION['nome'] = $linha_user['nome'];
            header("Location: painel.php");//direciona para outra pagina
        }
    }

?>