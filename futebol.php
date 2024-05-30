<?php 
    $hostname = "localhost";
    $bancodedados = "cliente";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno){
        echo "falha ao conectar:(". $mysqli->connect_errno . ")". $mysqli->connect_errno;
        }
    else 
        echo "Conectado ao Banco de Dados";

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conrxao, $email);

    $sql = "SELECT email FROM cliente.futebol WHERE email= '$email";

    $retorno = mysqli_query($conrxao, $sql);

    if (mysqli_num_rows($retorno)>0){
        echo "Email Já cadastrado";

    }else{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cliente.futebol(email, senha)values('$email', '$senha')";

    $resposta = mysqli_query($conrxao, $sql);
    echo "Usuário cadastrado com sucesso<BR>";
    }

?>