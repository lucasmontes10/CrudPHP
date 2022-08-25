<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
//Vou criar uma rota nova, parâmetros para criação da rota
//('endereço da requisição', 'classeController@metododaclasse')
$router->get('/fotos', 'HomeController@fotos');