<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {
    //Rota por padrão, chamamos de index
    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    //Criaremos uma rota para as fotos
    public function fotos(){
        // echo "Seja bem vindo a pagina de fotos do sistema";
        $this->render('fotos');
    }
}