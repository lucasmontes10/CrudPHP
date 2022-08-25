<?php
use core\Router;
use src\controllers\UsuarioController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
//Vou criar uma rota nova, parâmetros para criação da rota
//('endereço da requisição', 'classeController@metododaclasse')
$router->get('/fotos', 'HomeController@fotos');

$router->get('/create', 'UsuarioController@add');
$router->post('/create', 'UsuarioController@addAction');

$router->get('/{id}/remove', 'UsuarioController@remove');