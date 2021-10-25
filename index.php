<?php

	require_once 'vendor/autoload.php';

	use Weliton\PdoEstudos\Domain\Model\{Teste,Insere};
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	$pdo = ConnectionCreator::createConnection();

	/**
	 * tabela testes
	 * id
	 * name
	 * description
	 **/
	

	$insereDadoBanco = new Insere($pdo);

	//$insereDadoBanco->retornaArray(6,'Patricia','Nada a Declarar');


	$selectTestes = $pdo->query( "SELECT * FROM testes; ");

	while ($testeList = $selectTestes->fetch(PDO::FETCH_ASSOC)) {
			$showList = new Teste(
				$testeList['id'],
				$testeList['name'],
				$testeList['description'],

			);

			echo "# ".$showList->id()."<br>";
			echo $showList->name(). "<br>";
			echo $showList->description()."<br>";
			echo "<br>";
	}


