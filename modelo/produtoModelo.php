<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM Produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM Produto WHERE idProduto= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return produto;
}

function adicionarProduto($id, $nome, $descricao, $categoria, $preco) {
    $sql = "INSERT INTO Produto (idProduto,nome, descricao, categoria, preco) 
    VALUES ('$id','$nome', '$descricao', '$categoria','$preco')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao adicionar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($id, $nome, $descricao, $categoria, $preco) {
    $sql = "UPDATE Produto SET nome = '$nome', descricao = '$descricao', categoria = '$categoria', preco = '$preco' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar o produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM Produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}

function pegarProdutoPorCategoria($email, $senha) {
    $sql = "SELECT * FROM Produto WHERE categoria = '$categoria'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

