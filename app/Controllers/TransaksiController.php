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

    
	public function getProductWithAjax(){
        if($this->request->isAJAX()){
		$id = $this->request->getVar('id');

        $data = $this->ProdukModel->find($id);

        }
		echo json_encode($data);
        
	}

	public function getSalesWithAjax(){
        if($this->request->isAJAX()){
		$id = $this->request->getVar('id');

        $data = $this->ModelPengguna->find($id);
	
        }
		echo json_encode($data);
        
	}

	public function getSKreditWithAjax(){
        if($this->request->isAJAX()){
		$id = $this->request->getVar('id');

        $data = $this->ModelSimulasiKredit->find($id);
	
        }
		echo json_encode($data);
        
	}

    public function subtotal(){
        if($this->request->isAJAX()){
            $pembayaran = $this->request->getVar('pembayaran');
            $data = 0;
            if($pembayaran == 2){
                $hargajual = $this->request->getVar('hargaJual');
                $tenorr = $this->request->getVar('skreditTenor');
                $bunga = $this->request->getVar('skreditBunga');
                $Dp = $this->request->getVar('skreditDp');
                $tenor = $tenorr / 12;
                $total = $hargajual * $bunga / 100 * $tenor ;
                $data = $total + $hargajual;
            }else{
                $hargajual = $this->request->getVar('hargaJual');
                $data = $hargajual;
            }
        }
            echo json_encode($data);
    }
}
