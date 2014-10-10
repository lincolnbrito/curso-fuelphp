<?php
return array(
	'_root_'  => 'categorias/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	'celulares-com-tela-retina' => 'categorias/visualizar',
	'(\d{4})/consulta/(:any)' => 'categorias/visualizar/$1/$2',
);