<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSimulasiKredit;

class KreditController extends BaseController
{
    protected $ModelSimulasiKredit;
 
    public function __construct() {
 
        // Memanggil form helper
        helper('form');
		$this->form_validation = \Config\Services::validation();
        // Menyiapkan variabel untuk menampung upload model
        $this->ModelSimulasiKredit = new ModelSimulasiKredit();
    }
    public function index()
    {
        $simulasi = new ModelSimulasiKredit();
        $data['skredit'] = $simulasi->findAll();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Simulasi Kredit';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/produk/simulasi_kredit_index',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }

    public function create(){
		//session();
		$data['validation'] = \Config\Services::validation();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Tambah Data Pengguna';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/produk/simulasi_kredit_create',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}

    public function save(){
        //  $dt = $this->request->getVar();
		//    dd($dt);
	
		$jenis_kredit 		= $this->request->getVar('jenis_kredit');
        $deskripsi   		= $this->request->getVar('deskripsi');
        $tenor       		= $this->request->getVar('tenor');
		$bunga_pinjaman 	= $this->request->getVar('bunga_pinjaman');
		$uang_muka      	= $this->request->getVar('uang_muka');
		$asuransi      		= $this->request->getVar('asuransi');
		$provisi      		= $this->request->getVar('provisi');
		$administrasi      	= $this->request->getVar('administrasi');
		$polis_asuransi     = $this->request->getVar('polis_asuransi');

		if(!$this->validate([
			'jenis_kredit'	=> 'required|trim',
			'bunga_pinjaman'=> 'required|trim|numeric',
			'uang_muka'     => 'required|trim|numeric',
			'deskripsi'   	=> 'required|trim',
			'tenor'	        => 'required|trim|numeric',
			'asuransi'	    => 'required|trim|numeric',
			'administrasi'  => 'required|trim|numeric',
			'provisi'	    => 'required|trim|numeric',
			'polis_asuransi'=> 'required|trim|numeric',
        ])){
			//session();
            $data1['validation'] = \Config\Services::validation();
			//dd($validation);
            $session = session()->get('username');
			if(!empty($session)){
				return redirect()->to('/KreditController/create')->withInput();
			}else{
			session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
				return redirect()->to('/');
			}
        }else{
 
            $data = [
                'jenis_kredit' 	    => $jenis_kredit,
				'deskripsi' 	    => $deskripsi,
				'uang_muka' 		=> $uang_muka,
				'tenor' 			=> $tenor,
				'bunga_pinjaman' 	=> $bunga_pinjaman,
				'asuransi' 			=> $asuransi,
				'provisi' 			=> $provisi,
				'administrasi' 		=> $administrasi,
				'polis_asuransi' 	=> $polis_asuransi,
				'created_at'		=> time(),
            ];
			
			//dd($data);
            $this->ModelSimulasiKredit->insert($data);

			session()->setFlashdata('success', 'Tambah Data Produk Berhasil');
			return redirect()->to(base_url('/KreditController/'));
		}
	}
}
