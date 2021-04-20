<?php

namespace App;

use App\Core\Model;

class Auth {

    public static function Login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        if($stmt->rowCount() >= 1) {
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($password, $resultado['password'])) {
                $_SESSION['logged'] = true;
                $_SESSION['userId'] = $resultado['id'];
                $_SESSION['userName'] = $resultado['name'];
                header('Location: /admin/index');
            } else {
                return "Senha inválida";
            }
        } else {
            return "Email inválido";
        }
    }

    public static function Logout() {
        session_destroy();
        header('Location: /home/login');
    }

    public static function checkLogin() {
        if(!$_SESSION['logged']) {
            header('Location: /home/login');
            die;
        }
    }
}