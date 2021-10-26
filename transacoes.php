<?php
	
	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Infrastructure\Repository\ProdutoRepository;
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';

	$connection = ConnectionCreator::createConnection();

	$newInsertTest = new ProdutoRepository($connection);

	$connection->beginTransaction();

	//$newInsertTest->retornaArray(7,'Danielle','Eu era inesperiente');
	//$newInsertTest->retornaArray(8,'Camila','Moça interassante e dança muito bem.');
	$produto = new Produto(null,'Feijão super caro','Mano ta carooo');
		$newInsertTest->insereBanco($produto);
	
	$produto2 = new Produto(null,'Arroz ponta de diamante','Ave maria caro é pouco');
		$newInsertTest->insereBanco($produto2);
	
	$produto3 = new Produto(null,'Cerveja enjoada com aroma de manga','Se é louco muito caro');
		$newInsertTest->insereBanco($produto3);
	

	//$connection->commit();

	