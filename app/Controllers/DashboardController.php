<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\ModelSimulasiKredit;
use App\Models\ModelSlider;

class DashboardController extends BaseController
{
	protected $ProdukModel;
	protected $ModelSimulasiKredit;

    public function __construct() {
 
        // Memanggil form helper
        helper('form');
		$this->form_validation = \Config\Services::validation();
        // Menyiapkan variabel untuk menampung upload model
        $this->ProdukModel = new ProdukModel();
        $this->ModelSimulasiKredit = new ModelSimulasiKredit();
    }

	public function index()
	{
		$slider = new ModelSlider();
		$data = [
			'slider' => $slider->findAll(),
			'title' => 'Home'
		];
		echo view('template/frontendTemplate/header',$data);
		echo view('frontend/index',$data);
		echo view('template/frontendTemplate/footer');
	}

	public function vehicles()
	{
		$produk = new ProdukModel();
		$data = [
			'produk' => $produk->findAll(),
			'title' => 'Our Vehicles',
			'judul'	=> 'Our Vehicles'
		];
		// dd($data);
		echo view('template/frontendTemplate/headerdetail',$data);
		echo view('frontend/OurVehicles', $data);
		echo view('template/frontendTemplate/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'About',
			'judul'	=> 'About'
		];
		echo view('template/frontendTemplate/headerdetail',$data);
		echo view('frontend/about', $data);
		echo view('template/frontendTemplate/footer');
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact',
			'judul'	=> 'Contact'
		];
		echo view('template/frontendTemplate/headerdetail',$data);
		echo view('frontend/contact', $data);
		echo view('template/frontendTemplate/footer');
	}

	public function simulasi()
	{
		$simulasi = new ModelSimulasiKredit();
		$data = [
			'skredit' => $simulasi->findAll(),
			'title' => 'Simulasi Kredit',
			'judul'	=> 'Simulasi Kredit'
		];
		echo view('template/frontendTemplate/headerdetail',$data);
		echo view('frontend/simulasi', $data);
		echo view('template/frontendTemplate/footer');
	}

	public function notifWa($id)
	{ 
		$data = $this->ProdukModel->find($id);
		//dd($data);
		$str='Produk :'.$data->nama_produk.'%0D%0AType : '.$data->type_produk.'%0D%0AWarna : '.$data->warna.'%0D%0A%0D%0ASaya ingin tau lebih tentang produk ini%0D%0A%0D%0ATerimakasih banyak';
		return redirect()->to('https://api.whatsapp.com/send?phone=6289659941572&text=XPE-SPORT%20MOBIL%20INDONESIA%0D%0A%0D%0AHi%20Salesman%20saya%20tertarik%20dengan%0D%0A%0D%0A'.$str.'',null, 'refresh');
	}

}
