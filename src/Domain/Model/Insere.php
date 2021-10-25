<?php
	
	namespace Weliton\PdoEstudos\Domain\Model;
	
	use Weliton\PdoEstudos\Domain\Model\Teste;

	use PDO;
/**
 * private ?int $idTeste;
	private string $nameTeste;
	private string $descriptionTeste;
 */
class Insere extends Teste
{
	private PDO $connection;
	

	public function __construct(PDO $connection)
	{
		$this->connection = $connection;
	}

	public function retornaArray(int $idTeste, string $nameTeste, string $descriptionTeste )
	{
		parent::__construct($idTeste,$nameTeste,$descriptionTeste);

		return $this->insertBanco($listaArray =
		[
			1=>
			['dateBd' => $idTeste ],
			2=>
			['dateBd' => $nameTeste],
			3=>
			['dateBd' => $descriptionTeste]
		]);

		
		 
	}

	public function insertBanco(array $listaArray):void
	{
		
		$sql = "INSERT INTO testes(id,name,description) VALUES
			(?,?,?);
		";

		$insert = $this->connection->prepare($sql);

		foreach($listaArray as $i => $lista){
			$insert->bindValue($i,$lista['dateBd']);
			$insert->bindValue($i,$lista['dateBd']);
			$insert->bindValue($i,$lista['dateBd']);
	    }

	    if($insert->execute()){
	    	
	    	echo "inserido com sucesso". "<br>";
	    }
		
	}



}
