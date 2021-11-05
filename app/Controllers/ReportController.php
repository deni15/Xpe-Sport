<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ProdukModel;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    protected $ModelPengguna;
    protected $ProdukModel;
 
    public function __construct() {
        $this->ModelPengguna = new ModelUser();
        $this->ProdukModel = new ProdukModel();
    }
    public function reportPengguna()
    {
        $users = new ModelUser();
        $data['users'] = $users->findAll();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Report Data Pengguna';
				   echo view('content/Report/ReportPengguna',$data);
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}

    }

    public function reportProduk(){
        $produk = new ProdukModel();
        $data['produk'] = $produk->findAll();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Report Produk';
				   echo view('content/Report/ReportProduk',$data);
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }
}
