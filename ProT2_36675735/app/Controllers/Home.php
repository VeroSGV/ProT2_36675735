<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void 
    {
        
        echo view('front/head_view');
        echo view('front/navbar_vew');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function Nosotros():void
    {
        echo view('front/head_view');
        echo view('front/navbar_vew');
        echo view('front/Nosotros');
        echo view('front/footer_view');
    }


    public function login():void 
    {
        echo view('front/head_view');
        echo view('front/navbar_vew');
        echo view('front/login');
        echo view('front/footer_view');
    }

   
}
