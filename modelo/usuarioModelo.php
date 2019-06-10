<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
    $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $sobrenome, $email, $senha, $telefone, $endereco) {
    $sql = "INSERT INTO usuario (nome, sobrenome, email, senha, telefone, endereco) 
    VALUES ('$nome', '$sobrenome','$email', '$senha', '$telefone', '$endereco')";
    //echo "<br>".$sql;
    $cnx = conn();
    $resultado = mysqli_query($cnx, $sql);
    if($resultado == true){
        echo "Deu certo";
    }else{
        echo "Deu errado";
    }
}

function editarUsuario($email, $nome, $sobrenome, $senha, $telefone) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha', email = '$telefone', endereco = '$endereco' WHERE idcliente = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE idcliente = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); 
    }
    return 'Usuario deletado com sucesso!';
            
}

function pegarUsuarioPorNome($nome) {
    $sql = "SELECT * FROM usuario WHERE nome = $nome";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}