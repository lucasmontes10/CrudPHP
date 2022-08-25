<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UsuarioController extends Controller {
    //Rota por padrão, chamamos de index
    public function add() {
        // $this->render('home', ['nome' => 'Bonieky']);
        $this->render('create');
    }
    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        if ($nome && $email){
            $data = Usuario::select()->where('email', $email)->execute();
            if (count($data) == 0){
                Usuario::insert([
                    'nome'=>$nome,
                    'email'=>$email
                ])->execute();
                $this->redirect('/');
            }else{
                $this->redirect('create', $nome);
            }
        }else{
            $this->redirect('create');
        }
    }
}