<?php

namespace App\Controllers;

use App\Models\Students;

class pageEditController extends BaseController
{

    public function index($id)
    {
        $students = new Students;
        $data['students'] = $students->where('id', $id)->first();

        return view('pages/edit', $data);
    }

    public function edit($id)
    {
        $students = new Students;

        $students->update($id, [
            'name' => $this->request->getPost('name'),
            'gender' => $this->request->getPost('gender'),
            'majors' => $this->request->getPost('majors'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ]);

        return redirect()->to('/home');
    }
}
