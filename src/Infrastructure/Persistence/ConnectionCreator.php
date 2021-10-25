<?php

namespace Weliton\PdoEstudos\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
	public static function createConnection():PDO
	{
		$dBancoPath = __DIR__.'/../../../bancoTeste.sqlite';
		return $pdo = new PDO('sqlite:'.$dBancoPath);
	

	}
}
