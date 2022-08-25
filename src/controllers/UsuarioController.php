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
                $this->redirect('/create', $nome);
            }
        }else{
            $this->redirect('/create');
        }
    }

    public function remove($id){
        Usuario::delete()->where('id', $id)->execute();
        $this->redirect('/');
    }

    public function modificar($args){  //vai receber argumentos
        // $usuario = Usuario::select()->where('id', $args['id'])->execute();
        $usuario = Usuario::select()->find($args['id']); //quando vc procura pelo id, mais rápido e menos codigo
        //ele pega o primeiro elemento com esse id
        $this->render('alterar', ['usuario' => $usuario]); 
    }
    public function modificarAction($args){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        if($nome && $email){
            Usuario::update()->set('nome', $nome)->set('email', $email)->
            where('id', $args['id'])->execute();
            $this->redirect('/');
        }else{
            $this->redirect('/{id}/change');
        }
    }
}