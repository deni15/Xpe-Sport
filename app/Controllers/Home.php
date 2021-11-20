<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ProdukModel;
use App\Models\ModelTransaksi;
use App\Models\ModelCustomer;
use App\Models\ModelSimulasiKredit;
use App\Models\ModelCreditDetail;
use App\Models\ModelCashDetail;

class Home extends BaseController
{
	protected $ModelPengguna;
    protected $ProdukModel;
    protected $ModelSimulasiKredit;
    protected $ModelCreditDetail;
    protected $ModelCashDetail;
 
    public function __construct() {
        $this->ModelPengguna = new ModelUser();
        $this->ModelTransaksi = new ModelTransaksi();
        $this->ProdukModel = new ProdukModel();
        $this->ModelSimulasiKredit = new ModelSimulasiKredit();
        $this->ModelCustomer = new ModelCustomer();
        $this->ModelCreditDetail = new ModelCreditDetail();
        $this->ModelCashDetail = new ModelCashDetail();

    }

	public function index()
	{
	$data = [
		'produk' => $this->ProdukModel->get()->getNumRows(),
		'order'  => $this->ModelTransaksi->get()->getNumRows(),
		'user' 	 => $this->ModelPengguna->get()->getNumRows(),
	];
	//dd($data['produk']);
	$session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Dashboard';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/dashboard');
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}

}
