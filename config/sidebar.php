<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'fa fa-th-large',
		'title' => 'Dashboard',
		'url' => '/dashboard/v2',
	],[
		'icon' => 'fas fa-user-plus',
		'title' => 'Começar consulta',
		'url' => '/cadastro-paciente',
	],[
		'icon' => 'fas fa-users',
		'title' => 'Lista de paciente',
		'url' => '/table/manage/default',
	],
	[
		'icon' => 'fas fa-user-md',
		'title' => 'Lista de médicos',
		'url' => '/table/manage/autofill',
	]]
	
];
