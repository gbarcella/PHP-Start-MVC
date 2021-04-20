<?php

use App\Auth;
use App\Core\Controller;

class Home extends Controller {

    public function index() {

        $this->view('home/index');
    }

    public function login() {

        $mensagem = array();

        if(isset($_POST['acessar'])) {
            if(empty($_POST['email']) || empty($_POST['password'])){
                $mensagem[] = "O campo email e senha são obrigatórios";
            } else {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $mensagem[] = Auth::Login($email, $password);
            }
            
        }

        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }

    public function logout() {
        Auth::Logout();
    }
}