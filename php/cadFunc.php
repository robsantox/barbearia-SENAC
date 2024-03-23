<?php

    include 'conexao.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $datainicio = $_POST['data'];

    $sql = ("INSERT INTO empresa (nome_adm,senha,email,cpf,telefone,aniversario,datainicio) VALUES ('$nome', '$senha', '$email', '$cpf', '$telefone', '$aniversario', '$datainicio')");

    $result = mysql_query($conn, $sql);

    $rows = mysql_affected_rows($conn);

    if($rows > 0){
        echo "<script>alert('Barbeiro cadastrado!");window.location.href='http://localhost/barbearia/cadastrar.php'</script>";
    }
    else{
        echo "ERRO AO AGENDAR";
    }

?>