<?php

function conn() {
    $conexao = mysqli_connect("localhost", "root", "", "lojasbr");
    if (!$conexao){
		die("Conexao falhou: " . mysql_connect_error());
    }
    
    return $conexao;
}
