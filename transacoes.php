<?php
	
	use Weliton\PdoEstudos\Domain\Model\{Teste,Insere};
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';

	$connection = ConnectionCreator::createConnection();

	$newInsertTest = new Insere($connection);

	$connection->beginTransaction();

	$newInsertTest->retornaArray(7,'Danielle','Eu era inesperiente');
	$newInsertTest->retornaArray(8,'Camila','Moça interassante e dança muito bem.');
	$newInsertTest->retornaArray(9,'Fernanda','Inteligente e de olhos grandes e bonitos');

	//$connection->commit();

