<?php

namespace App\Controllers;

use  App\Models\PessoasModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('home');
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function page($page='home') {

        echo view('template/header');
        echo view($page);
        echo view('template/footer');

    }

    public function pessoa() {
        // instância => variavel para criar o objeto
        // variavel para apontar o objeto $model
        $model = new PessoaModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=> $model->getPessoas()
        ];

        echo view('template/header');
        echo view('pessoa');
        echo view('template/footer');

    }
}
