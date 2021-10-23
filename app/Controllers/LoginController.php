<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class LoginController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->form_validation = \Config\Services::validation();
        
    }

	public function index()
	{
        $data = [
            'validation' => \Config\Services::validation()
        ];
		return view('auth/login', $data);
	}

	public function process()
    {
        $users = new ModelUser();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
		//validation

        if(!$this->validate([
            'username' => 'required|alpha|trim',
            'password' => 'required|trim|min_length[6]|max_length[16]'
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/')->withInput()->with('validation', $validation);
        }
        
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if ($password == $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'fullname' => $dataUser->fullname,
                    'id_groups' => $dataUser->id_groups,
                    'gambar' => $dataUser->gambar,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
	function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
