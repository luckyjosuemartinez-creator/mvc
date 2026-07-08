<?php

namespace App\Controllers;

use app\Models\Contact;

class HomeController
{
    public function index()
    {
        $contactModel = new Contact();

        return $this->view('home',[
            'title' => 'Home',
            'description' => 'Esta es la pagina home'
        ]);
    }    

}    