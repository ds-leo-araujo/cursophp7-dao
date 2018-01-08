<?php 

	require_once("config.php");

	//As três linhas abaixo foram utilizadas no começo da programação para teste.
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	$root = new Usuario();

	$root->loadById(3);

	echo $root; // como é um objeto, vai chamar o método __toString da classe Usuario

?>