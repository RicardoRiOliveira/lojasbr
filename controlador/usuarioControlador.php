<?php

require_once "./modelo/usuarioModelo.php";


function listar() {
    $dados = array();
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}


function adicionar(){
	if (ehPost()) {       
                $nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$telefone = $_POST["telefone"]; 
                $endereco = $_POST["endereco"];
                
		$errors = array ();

		if (strlen(trim(htmlentities($nome))) == 0) {
			$errors[] = "insira um nome...";
                }
                
                if (strlen(trim(htmlentities($sobrenome))) == 0) {
			$errors[] = "insira um sobrenome...";
		}
		
                if (strlen(trim(htmlentities($email))) == 0) {
			$errors[] = "Ensira um email...";
		}else{
			if (FILTER_VAR($email , FILTER_VALIDATE_EMAIL) == false) {
				$errors[] = "Insira um email válido...";
			}
                }
                
                if(strlen(trim(htmlentities($senha))) == 0){
                    $errors[] = "insira uma senha...";
                }
                
                /*if ($confirmacaosenha == $senha){
                    echo "Compativel...";
                }else{
                    $errors[] = As senhas nao estao iguais";
                }*/
                     $msg = adicionarUsuario($nome, $sobrenome, $email, $senha, $telefone, $endereco);
                     //exibir ("usuario/listar");
                
                }
                    exibir("usuario/formulario");
                
                
                
                
}
                
               
                
                
function deletar($id) {
    $msg = deletarUsuario($id);
    redirecionar("usuario/listar");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];
        
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
