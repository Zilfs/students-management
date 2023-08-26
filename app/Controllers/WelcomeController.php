<?php

namespace App\Controllers;

class WelcomeController extends BaseController
{
    public function index(): string
    {
        return view('pages/welcome_message');
    }
}
