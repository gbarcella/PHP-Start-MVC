<?php

use App\Auth;
use App\Core\Controller;

class Admin extends Controller {

    public function index() {
        Auth::checkLogin();

        $this->view('admin/index');
    }

}
