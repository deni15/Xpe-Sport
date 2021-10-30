<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProdukController extends BaseController
{

    protected $ProdukModel;

    public function __construct() {
 
        // Memanggil form helper
        helper('form');
		$this->form_validation = \Config\Services::validation();
        // Menyiapkan variabel untuk menampung upload model
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {
        $produk = new ProdukModel();
        $data['produk'] = $produk->findAll();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Master Produk';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/produk/dataProduk',$data);
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
			$data['title'] = 'Tambah Data Produk';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/produk/tambahData',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}

	public function save(){
		//  $dt = $this->request->getVar();
		//  dd($dt);
		$nama_produk 	= $this->request->getVar('nama_produk');
        $type_produk 	= $this->request->getVar('type_produk');
        $harga_modal 	= $this->request->getVar('harga_modal');
		$harga    		= $this->request->getVar('harga');
		$stok   		= $this->request->getVar('stok');
		$tahun_buat 	= $this->request->getVar('tahun_buat');
		$warna		    = $this->request->getVar('warna');

		// if ($this->request->getMethod() !== 'post') {
        //     return redirect()->to(base_url('PenggunaController/create'));
        // }
		if(!$this->validate([
			'gambar' 		=> 'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,14096]',
			'nama_produk'	=> 'required|trim',
			'harga'   	    => 'required|trim|numeric',
			'harga_modal'   => 'required|trim|numeric',
			'type_produk'   => 'required|trim',
			'tahun_buat'    => 'required|trim',
			'stok'		    => 'required|trim|numeric',
			'warna'		    => 'required|trim'
        ])){
			//session();
            $data1['validation'] = \Config\Services::validation();
			//dd($validation);
            $session = session()->get('username');
			if(!empty($session)){
				$data1['title'] = 'Tambah Data Produk';
					echo view('template/templateAdmin/head',$data1);
					echo view('content/produk/tambahData',$data1);
					echo view('template/templateAdmin/foot');
			}else{
			session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
				return redirect()->to('/');
			}
        }else{
 
				// ambil gambar
				$avatar = $this->request->getFile('gambar');

				//menggunakan gambar default jika gambar kosong
				if($avatar->getError() == 4){
					//meenggunakan default gambar
					$namaGambar = 'default-user.jpg';
				}else{
					//mengambil nama gambar dan random name
					$namaGambar = $avatar->getRandomName();
					//memindahkan file ke public assset
					$avatar->move('public/assets/images/produk_foto', $namaGambar);
				}
          
            $data = [
                'gambar' 			=> $namaGambar,
				'nama_produk' 	    => $nama_produk,
				'type_produk' 		=> $type_produk,
				'harga' 			=> $harga,
				'harga_modal' 	    => $harga_modal,
				'stok' 			    => $stok,
				'tahun_buat' 	    => $tahun_buat,
				'warna' 		    => $warna,
				'created_at'		=> time(),
            ];
			
			//dd($data);
            $this->ProdukModel->insert($data);

			session()->setFlashdata('success', 'Tambah Data Produk Berhasil');
			return redirect()->to(base_url('/ProdukController/'));
		}
	}

    public function delete($id){
		$this->ProdukModel->delete($id);
		session()->setFlashdata('success', 'Hapus Produk Berhasil');
	    return redirect()->to(base_url('/ProdukController/'));
	}
}
