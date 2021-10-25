<?php

	namespace Weliton\PdoEstudos\Domain\Repository;

interface TesteRepository
{
	public  function recuperaTeste():string;
	public  function insereBanco():array;
	public  function remove():boll;
	public  function update():bool;
	
}