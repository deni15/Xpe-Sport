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
                if($slider1->getError() == 4){
					//meenggunakan default gambar
					$namaslider1 = 'default banner.jpg';
				}else{
                    $namaslider1 = $slider1->getRandomName();
                    $slider1->move('assets/images/item gambar', $namaslider1);
				}

				$slider2 = $this->request->getFile('slider2');
                if($slider2->getError() == 4){
					//meenggunakan default gambar
				}else{
                    $namaslider2 = $slider2->getRandomName();
                    $slider2->move('assets/images/item gambar', $namaslider2);
				}
				
                $slider3 = $this->request->getFile('slider3');
                if($slider3->getError() == 4){
					//meenggunakan default gambar
					$namaslider3 = 'default banner.jpg';
				}else{
                    $namaslider3 = $slider3->getRandomName();
				    $slider3->move('assets/images/item gambar', $namaslider3);
				}
				
                
// Gambar Slider
				$card1 = $this->request->getFile('card1');
                if($card1->getError() == 4){
					//meenggunakan default gambar
					$namacard1 = 'default banner.jpg';
				}else{
                    $namacard1 = $card1->getRandomName();
                    $card1->move('assets/images/item gambar', $namacard1);
				}

				$card2 = $this->request->getFile('card2');
                if($card2->getError() == 4){
					//meenggunakan default gambar
				}else{
                    $namacard2 = $card2->getRandomName();
                    $card2->move('assets/images/item gambar', $namacard2);
				}
				
                $card3 = $this->request->getFile('card3');
                if($card3->getError() == 4){
					//meenggunakan default gambar
					$namacard3 = 'default banner.jpg';
				}else{
                    $namacard3 = $card3->getRandomName();
				    $card3->move('assets/images/item gambar', $namacard3);
				}
				

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
                'slider1' 			=> $namaslider1,
                'slider2' 			=> $namaslider2,
                'slider3' 			=> $namaslider3,
                'card1' 			=> $namacard1,
                'card2' 			=> $namacard2,
                'card3' 			=> $namacard3
            ];
			
			// dd($data);
            $this->ModelSlider->update(1,$data);

			session()->setFlashdata('success', 'Tambah Data Produk Berhasil');
			return redirect()->to(base_url('home'));
	}

}
