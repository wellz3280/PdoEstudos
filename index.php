<?php

	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Infrastructure\Repository\ProdutoRepository;
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';
	
	$pdo = ConnectionCreator::createConnection();

	/**
	 * tabela testes
	 * id
	 * name
	 * description
	 **/
	

	$teste = new ProdutoRepository($pdo);
		$tabela = "produdo";


		
			//$teste->remove(7,$tabela);

	//$produto = new Produto(12,'pocisão 1','pocisão 2');
	//$array = [$produto->id(),$produto->name(),$produto->description()];
	//var_dump($produto);

	//echo implode(',',array_fill(0, count($array), '?'));
	$query = $pdo->query("SELECT * FROM {$tabela} ;");

	while($notas = $query->fetch(PDO::FETCH_ASSOC)){
		$show = new Produto(
				$notas['id'],
				$notas['name'],
				$notas['description']
			);
		echo $show->id() . PHP_EOL;
		echo $show->name() . PHP_EOL;
		echo $show->description() . PHP_EOL;
	}
	
	$altera = new Produto(6,'alface foda gurmetizado roxo','se é louco ta a peso de ouro ');				

	//$teste->update($altera,$tabela);

	//$teste->remove(7,$tabela);		
	


	exit();
	$repository = $teste->showProduto($tabela);
	echo "<pre>";
		var_dump($repository);
	echo "</pre>";
	

