<?php

require_once "modelo/produtooModelo.php";

function index() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function adicionar(){

	if (ehPost()) {
		$id = $_POST["idProduto"];
		$nome = $_POST["nome"];
		$descricao = $_POST["descricao"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];
                
		//validação
                
		$errors = array ();
                if (strlen(trim(htmlentities($id))) == 0){
                    $errors[] = "insira um id...";
                }else{
                    
                }if (strlen(trim(htmlentities($nome))) == 0) {
			$errors[] = "insira um nome...";
                }else{
                        
		}if (strlen(trim(htmlentities($descricao))) == 0) {
			$errors[] = "insira uma descricao...";
		}else{

		}if (strlen(trim(htmlentities($categoria))) == 0) {
			$errors[] = "Ensira uma categoria...";
		}else{
		}if (strlen(trim(htmlentities($preco))) == 0){
                        $errors[] = "Ensira um preco...";
		}}else{ 
                    echo "Sem dados a serem mostrados";
                }
                    exibir("usuario/formulario");
                } 
                
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("usuario/index");
}

function editar($id) {
    if (ehPost()) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        alert(editarProduto($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados['produtos'] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarProdutoPorId($id);
    exibir("usuario/visualizar", $dados);
}
