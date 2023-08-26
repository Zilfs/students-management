<?php

namespace App\Controllers;

use App\Models\Students;

class pageAddController extends BaseController
{
    public function index()
    {
        return view('pages/add');
    }

    protected $Students;
    public function __construct()
    {
        $this->Students = new Students();
    }

    public function save()
    {

        $this->Students->save([
            'name' => $this->request->getVar('name'),
            'gender' => $this->request->getVar('gender'),
            'majors' => $this->request->getVar('majors'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
        ]);

        return redirect()->to('/home');
    }
}
