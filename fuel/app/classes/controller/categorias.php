<?php

use Model\Categoria;

class Controller_Categorias extends Controller
{
	public function action_index()
	{
		$categoria = Categoria::forge(array('nome'=>'Lincoln', 'sobrenome'=>'Brito'));

		$data['categoria'] = $categoria;

		return View::forge('categorias/index', $data);
	}

	public function action_listar()
	{
		echo 'oi, eu sou o método listar do controller categorias';
	}
	public function action_listar_rest()
	{
		echo 'Usando API hein?';
	}

	public function action_visualizar($ano = null, $texto = null)
	{
		echo "VISUALIZANDO: $ano - $texto";
	}

	public function action_visualizar_params()
	{
		print_r($this->params());
		echo $this->param('dia') ."-". $this->param('mes') ."-". $this->param('ano');
		//echo "VISUALIZANDO: $ano - $texto";
	}

}