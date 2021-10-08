<?php

namespace App\Controllers;

class Home extends BaseController
{
	
	public function index()
	{
	$session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Dashboard';
				   echo view('template/templateAdmin/headerAdmin',$data);
				   echo view('content/dashboard');
				   echo view('template/templateAdmin/footerAdmin');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}

}
