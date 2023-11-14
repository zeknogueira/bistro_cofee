<?php
require_once "conexao.php";
// Obter os dados do formulário
$id = $_GET["id"];
$tipo = $_GET["tipo"];
$nome = $_GET["nome"];
$descricao = $_GET["descricao"];
$imagem = $_GET["imagem"];
$preco = $_GET["preco"];

if ($senha === $confirmarsenha) {
    // Inserir os dados na tabela 'usuario'
    $sql = "INSERT INTO produtos (id, tipo, nome, descricao, imagem, preco) VALUES ('$id', '$tipo', '$nome', '$descricao', '$imagem', '$preco');
    ";

    if ($conn->query($sql) === TRUE) {
        header("Location: editar-produto-sucesso.php");
        exit();
    } else {
        header("Location: cadastrar-produto.php?erro=2");
        exit();
    }
    $conn->close();
}else{
    header("Location: cadastrar-produto.php?erro=1");
    exit();
}
