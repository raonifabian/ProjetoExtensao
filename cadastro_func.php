<?php 

session_start(); //inicia a sessao na pagina

    require_once "conexao.php"; //puxa o arquivo que faz conexão com o banco de dados


    //recebe as informações do formulario de cadastro
    $nome = filter_input(INPUT_POST, 'cadNome', FILTER_DEFAULT);

    $email = filter_input(INPUT_POST, 'cadEmail', FILTER_VALIDATE_EMAIL);

    //md5 faz a função de criptografar a senha no padrao hash md5
    $senha = md5(filter_input(INPUT_POST, 'cadSenha', FILTER_DEFAULT));

    $cpf = filter_input(INPUT_POST, 'cadCpf', FILTER_SANITIZE_NUMBER_INT);

    //faz a solicitaçao para inserir as informações nas colunas respectivas no banco de dados
    $sql = "INSERT INTO cadaluno (nome, email, senha, cpf) VALUES ('$nome', '$email', '$senha', '$cpf')";

    //confirma se a inserção de informação deu certo ou não
    if(mysqli_query($conn, $sql)){ //informa se deu certo
        echo "usuário cadastrado com sucesso";
        header("Location: index.html");
    }else{//explica qual erro foi a causa;
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);//encerra a conexão com o banco de dados

?>