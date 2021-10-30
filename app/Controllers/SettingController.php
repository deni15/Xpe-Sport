<?php

namespace App\Controllers;
use App\Models\ModelSlider;

class SettingController extends BaseController
{
    protected $ModelSlider;

    public function __construct() {
 
        // Memanggil form helper
        helper('form');
		$this->form_validation = \Config\Services::validation();
        // Menyiapkan variabel untuk menampung upload model
        $this->ModelSlider = new ModelSlider();
    }
	public function item_gambar()
	{
        {
            $slider = new ModelSlider();
            $data['slider'] = $slider->findAll();
            $session = session()->get('username');
            if(!empty($session)){
                $data['title'] = 'Setting Frontend';
                       echo view('template/templateAdmin/head',$data);
                       echo view('frontend/item_gambar',$data);
                       echo view('template/templateAdmin/foot');
            }else{
            session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
                return redirect()->to('/');
            }
        }
	}
    public function create(){
		//session();
		$data['validation'] = \Config\Services::validation();
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'Tambah Setting Frontend';
				   echo view('template/templateAdmin/head',$data);
				   echo view('frontend/tambahData',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
	}
    public function save(){
				// Gambar Slider
				$slider1 = $this->request->getFile('slider1');
				$namaSlider1 = $slider1->getRandomName();
				$slider1->move('public/assets/images/produk_foto', $namaSlider1);
                
				$slider2 = $this->request->getFile('slider2');
				$namaslider2 = $slider2->getRandomName();
				$slider2->move('public/assets/images/produk_foto', $namaslider2);
				
                $slider3 = $this->request->getFile('slider3');
				$namaslider3 = $slider3->getRandomName();
				$slider3->move('public/assets/images/produk_foto', $namaslider3);

                // Gambar Card
                // $card1 = $this->request->getFile('card1');
				// $namacard1 = $card1->getRandomName();
				// $card1->move('public/assets/images/produk_foto', $namacard1);
                
				// $card2 = $this->request->getFile('card2');
				// $namacard2 = $card2->getRandomName();
				// $card2->move('public/assets/images/produk_foto', $namacard2);
				
                // $card3 = $this->request->getFile('card3');
				// $namacard3 = $card3->getRandomName();
				// $card3->move('public/assets/images/produk_foto', $namacard3);
            $data = [
                'slider1' 			=> $namaSlider1,
                'slider2' 			=> $namaslider2,
                'slider3' 			=> $namaslider3,
                // 'card1' 			=> $namacard1,
                // 'card2' 			=> $namacard2,
                // 'card3' 			=> $namacard3
            ];
			
			//dd($data);
            $this->ModelSlider->insert($data);

			session()->setFlashdata('success', 'Tambah Data Produk Berhasil');
			return redirect()->to(base_url('home'));
	}

}
