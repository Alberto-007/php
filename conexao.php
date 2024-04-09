<?php
	
	try {
	// faz conexao com o banco de dados
	  $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
	} catch (PDOException $e) {
		//caso ocorra algum erro na conexao com o banco, exibe a mensagem
		echo 'Falha ao conectar com o banco de dados: ' . $e->getMessage() ;
}