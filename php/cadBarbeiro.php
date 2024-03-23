<?php

    //include = inclue o conteúdo de um arquivo dentro de outro
    include 'conexao.php';

    //if(isset($_POST['nome']) && isset)

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $datainicio = $_POST['data'];

    $sql = ("INSERT INTO barbeiro (nome,senha,email,cpf,telefone,aniversario,datainicio) VALUES ('$nome', '$senha', '$email', '$cpf', '$telefone', '$aniversario', '$datainicio')");

    $result = mysql_query($conn, $sql);

    $rows = mysql_affected_rows($conn);

    if($rows >0){
        echo "<script>alert('Barbeiro cadastrado!");window.location.href='http://localhost/barbearia/cadastrar.php'</script>";
    }
    else{
        echo "ERRO AO CADASTRAR BARBEIRO";
    }