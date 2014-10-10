<?php
namespace Model;

class Categoria extends \Orm\Model
{
	public static $_properties = array(
		'nome',
		'sobrenome'
	);

	public function getNome()
	{
		return $this->nome.' '.$this->sobrenome;
	}
}