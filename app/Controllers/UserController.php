<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $model = new UserModel();

        if ($this->request->getMethod() === 'post' && $this->validate($model->validationRules)) {
            $model->save([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ]);

        // Set a success message in the session
        return redirect()->back()->with('success', 'User created successfully');
        } else {
            return view('users/create', ['validation' => $this->validator]);
        }
    }

    public function edit($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users/edit', $data);
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getVar('id');

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        $model->update($id, $data);
        // Set a success message in the session
        return redirect()->back()->with('success', 'User updateed successfully');
        
        return redirect()->to('/users');
    }

    public function delete($id = null)
    {
        $model = new UserModel();
        $model->delete($id);
        // Set a success message in the session
        return redirect()->back()->with('success', 'User deleted successfully');
        return redirect()->to('/users');
    }

}
