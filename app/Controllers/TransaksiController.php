<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ProdukModel;
use App\Models\ModelSimulasiKredit;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
{
    protected $ModelPengguna;
    protected $ProdukModel;
    protected $ModelSimulasiKredit;
 
    public function __construct() {
        $this->ModelPengguna = new ModelUser();
        $this->ProdukModel = new ProdukModel();
        $this->ModelSimulasiKredit = new ModelSimulasiKredit();

    }

    public function index()
    {
        $users = new ModelUser();
        $produk = new ProdukModel();
        $simulasikredit = new ModelSimulasiKredit();
        $data['users'] = $users->findAll();
        $data['skredit'] = $simulasikredit->findAll();
        // dd($data['users']);
        $data['produk'] = $produk->findAll();

        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Dashboard';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/transaksi/pembelian',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }
}
