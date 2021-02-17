<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactos extends Controller
{
    public function showContactos()
    {
        return view('contactos');
    }
}
