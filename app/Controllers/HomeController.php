<?php

namespace App\Controllers;

use App\Models\Students;

class HomeController extends BaseController
{
    public function index()
    {
        $Students = new Students;
        $student = $Students->findAll();

        $data = [
            'student' => $student,
        ];

        return view('pages/home', $data);
    }

    protected $Students;
    public function __construct()
    {
        $this->Students = new Students();
    }

    public function delete($id)
    {
        $this->Students->delete($id);
        return redirect()->to('/home');
    }
}
