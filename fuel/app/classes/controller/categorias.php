<?php

use Model\Categoria;

class Controller_Categorias extends Controller
{
	public function action_index()
	{
		$categoria = new Categoria('Eletrônicos');

		$data['categoria'] = $categoria;

		return View::forge('categorias/index', $data, false);
	}

	public function action_listar()
	{
		echo 'oi, eu sou o método listar do controller categorias';
	}
}