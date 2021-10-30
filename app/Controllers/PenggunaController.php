<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class PenggunaController extends BaseController
{
	protected $ModelPengguna;
 
    public function __construct() {
 
        // Memanggil form helper
        helper('form');
		$this->form_validation = \Config\Services::validation();
        // Menyiapkan variabel untuk menampung upload model
        $this->ModelPengguna = new ModelUser();
    }
    public function index()
    {
        $users = new ModelUser();
        $data['users'] = $users->findAll();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Dashboard';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/pengguna/dataPengguna',$data);
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
				   echo view('content/pengguna/tambahData',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}

	public function save(){

		//inilisasi dan membuat variabel data hasil request
		$fullname 		= $this->request->getVar('fullname');
		$username 		= $this->request->getVar('username');
		$tanggal_lahir  = $this->request->getVar('tanggal_lahir');
        $password 		= $this->request->getVar('password');
		$email    		= $this->request->getVar('email');
		$alamat   		= $this->request->getVar('alamat');
		$jenis_kelamin 	= $this->request->getVar('jenis_kelamin');
		$id_groups		= $this->request->getVar('id_groups');
		$no_telp 		= $this->request->getVar('no_telp');

		//validasi data 
		if(!$this->validate([
			'gambar' 		=> 'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,14096]',
			'fullname'	  	=> 'required|trim',
			'username'   	=> 'required|trim|alpha',
			'email'   		=> 'required|trim',
			'password'    	=> 'required|max_length[16]|min_length[6]|trim',
			'jenis_kelamin' => 'required|trim',
			'no_telp'		=> 'required|trim',
			'alamat'		=> 'required|trim',
			'id_groups'		=> 'required|trim'
        ])){
            $data1['validation'] = \Config\Services::validation();
            $session = session()->get('username');
			if(!empty($session)){
				$data1['title'] = 'Tambah Data Pengguna';
					echo view('template/templateAdmin/head',$data1);
					echo view('content/pengguna/tambahData',$data1);
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
				$avatar->move('assets/images/faces', $namaGambar);
			}
    
			//membuat array data untuk insert ke database
            $data = [
                'gambar' 			=> $namaGambar,
				'fullname' 			=> $fullname,
				'tanggal_lahir'     => $tanggal_lahir,
				'username' 			=> $username,
				'password' 			=> $password,
				'email' 			=> $email,
				'no_telp' 			=> $no_telp,
				'alamat' 			=> $alamat,
				'jenis_kelamin' 	=> $jenis_kelamin,
				'id_groups' 		=> $id_groups,
				'created_at'		=> time(),
            ];
			
			//insert data array ke database
            $this->ModelPengguna->insert($data);

			session()->setFlashdata('success', 'Tambah Data Pengguna Berhasil');
			return redirect()->to(base_url('/PenggunaController/'));
		}
	}

	public function edit($id){
		$data = [
			'title' 	=>	'Form Ubah Data Pengguna',
			'validation'=>	\Config\Services::validation(),
			'pengguna'	=>	$this->ModelPengguna->find($id)
		];

		$session = session()->get('username');
			if(!empty($session)){
				$data['title'] = 'Tambah Data Pengguna';
					echo view('template/templateAdmin/head',$data);
					echo view('content/pengguna/ubahData',$data);
					echo view('template/templateAdmin/foot');
			}else{
			session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
				return redirect()->to('/');
			}
		
	}

	public function update($id){

		 $users = new ModelUser();
         $gambarlama = $users->find($id);

		//dd($gambarlama);
		//  $dt = $this->request->getVar();
		//  dd($dt);
		$fullname 		= $this->request->getVar('fullname');
		$username 		= $this->request->getVar('username');
		$tanggal_lahir  = $this->request->getVar('tanggal_lahir');
        $password 		= $this->request->getVar('password');
		$email    		= $this->request->getVar('email');
		$alamat   		= $this->request->getVar('alamat');
		$jenis_kelamin 	= $this->request->getVar('jenis_kelamin');
		$id_groups		= $this->request->getVar('id_groups');
		$no_telp 		= $this->request->getVar('no_telp');

		// if ($this->request->getMethod() !== 'post') {
        //     return redirect()->to(base_url('PenggunaController/create'));
        // }
		if(!$this->validate([
			'gambar' 		=> 'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,14096]',
			'fullname'	  	=> 'required|trim',
			'username'   	=> 'required|trim|alpha',
			'email'   		=> 'required|trim',
			// 'password'    	=> 'required|max_length[16]|min_length[6]|trim',
			'jenis_kelamin' => 'required|trim',
			'no_telp'		=> 'required|trim',
			'alamat'		=> 'required|trim',
			'id_groups'		=> 'required|trim'
        ])){
			//session();
            $data1['validation'] = \Config\Services::validation();
			//dd($validation);
            $session = session()->get('username');
			if(!empty($session)){
				$data1['title'] = 'Tambah Data Pengguna';
					echo view('template/templateAdmin/head',$data1);
					echo view('content/pengguna/tambahData',$data1);
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
				$namaGambar = $this->request->getVar('gambarLama');
			}else{
				//mengambil nama gambar dan random name
				$namaGambar = $avatar->getRandomName();
				//memindahkan file ke public assset
				$avatar->move('assets/images/faces', $namaGambar);
				// hapus file lama
				unlink('assets/images/faces/' . $this->request->getVar('gambarLama') );
			}
 
            $data = [
                'gambar' 			=> $namaGambar,
				'fullname' 			=> $fullname,
				'username' 			=> $username,
				'tanggal_lahir'     => $tanggal_lahir,
				'email' 			=> $email,
				'no_telp' 			=> $no_telp,
				'alamat' 			=> $alamat,
				'jenis_kelamin' 	=> $jenis_kelamin,
				'id_groups' 		=> $id_groups,
				'updated_at'		=> time(),
            ];

			if(!empty($password)){
				$data['password'] = $password;
				}
			
            $this->ModelPengguna->update($id, $data);

			session()->setFlashdata('success', 'Update Data Pengguna Berhasil');
			return redirect()->to(base_url('/PenggunaController/'));
	}
}

	public function show($id){
		$data = [
			'title' 	=>	'Detail Data Pengguna',
			'validation'=>	\Config\Services::validation(),
			'pengguna'	=>	$this->ModelPengguna->find($id)
		];

		$session = session()->get('username');
			if(!empty($session)){
				$data['title'] = 'Detail Data Pengguna';
					echo view('template/templateAdmin/head',$data);
					echo view('content/pengguna/tampilData',$data);
					echo view('template/templateAdmin/foot');
			}else{
			session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
				return redirect()->to('/');
			}
		
	}

	public function delete($id){

		//cari gambar berdasarkan id
		$user = $this->ModelPengguna->find($id);
		// cek gambar default
		if($user['gambar'] != 'default-user.jpg'){
			//hapus gambar
			untink('assets/images/faces' . $user['gambar'] );
		}
		//delete data
		$this->ModelPengguna->delete($id);
		session()->setFlashdata('success', 'Hapus Pengguna Berhasil');
	    return redirect()->to(base_url('/PenggunaController/'));
	}
}