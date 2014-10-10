<?php
return array(
	'_root_'  => 'categorias/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	'celulares-com-tela-retina' => 'categorias/visualizar',
	'(\d{4})/consulta/(:any)' => 'categorias/visualizar/$1/$2',
	'categoria/:dia/:mes/:ano' => 'categorias/visualizar_params',
	'painel/dashboard' => array('categorias/listar','name'=>'painel'),
	
	'api/categorias/(:any)' => array(
		array('GET', new Route('categorias/$1_rest'))
	)
);