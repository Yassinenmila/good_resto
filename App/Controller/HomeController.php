<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->view('pages.home',[
            'title' => 'Home Page',
        ]);
    }

}