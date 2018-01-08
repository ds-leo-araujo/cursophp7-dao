<?php 

	require_once("config.php");

	//As três linhas abaixo foram utilizadas no começo da programação para teste.
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(3);
	//echo $root; // como é um objeto, vai chamar o método __toString da classe Usuario

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("Eliane");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("Nancy de Almeida", "12345");
	//echo $usuario;

	//Inserção de novo usuário
	/*
	$aluno = new Usuario("Afonso Araujo", "12345");
	$aluno->insert();
	echo $aluno;
	*/

	//Alteração, atualização de usuáios
	/*
	$usuario = new Usuario();
	$usuario->loadById(6);
	$usuario->update("Orlando Borges", "12345");
	echo $usuario;
	*/

	//Deletar usuário
	$usuario = new Usuario();
	$usuario->loadById(6);
	$usuario->delete();
	echo $usuario;

?>