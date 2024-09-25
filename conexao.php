<?php 

$servidor = "srv1077.hstgr.io";//define a variavel de onde está hospedado o banco de dados
$usuario = "u967032754_educatechifsp"; //confirma o usuario do banco
$senha = "#Fj^U4YQ3d"; //confirma a senha do banco
$db = "u967032754_educatechifsp"; //confirma qual das tabelas do banco será usada

//Criar a conexão com o banco de dados
$conn = mysqli_connect($servidor, $usuario, $senha, $db);

//seta consultas para o padrão utf8 permitindo acentos e caracteres especiciais
$conn->query("SET NAMES 'utf8'");
$conn->query("SET character_set_connection='utf8'");
$conn->query("SET character_set_client=utf8");
$conn->query("SET character_set_results=utf8");


//Teste de conexão com o banco
/*if(!$conn){ //testa se a variavel conexão é true or false, se for false, mostra o erro
      die("Falha na conexao: " . mysqli_connect_error());
}else{//mostra a conexão true com o banco
      echo "Conexao realizada com sucesso";
}*/

?>