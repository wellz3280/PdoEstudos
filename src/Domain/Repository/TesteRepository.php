<?php

	namespace Weliton\PdoEstudos\Domain\Repository;

interface TesteRepository
{
	
	public  function insereBanco():array;
	public  function remove():boll;
	public  function update():bool;
	
}