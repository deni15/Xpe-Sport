<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ProdukModel;
use App\Models\ModelTransaksi;
use App\Models\ModelCustomer;
use App\Models\ModelSimulasiKredit;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
{
    protected $ModelPengguna;
    protected $ProdukModel;
    protected $ModelSimulasiKredit;
 
    public function __construct() {
        $this->ModelPengguna = new ModelUser();
        $this->ModelTransaksi = new ModelTransaksi();
        $this->ProdukModel = new ProdukModel();
        $this->ModelSimulasiKredit = new ModelSimulasiKredit();
        $this->ModelCustomer = new ModelCustomer();

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

    public function save()
    {
        dd($this->request->getVar());
        
  
        //inialisasi
        $metodebayar    = $this->request->getVar('metodebayar');
        $product_id     = $this->request->getVar('product_id');
        $skredit_id     = $this->request->getVar('skredit_id');
        $sales_id       = $this->request->getVar('sales_id');
        $operator_id    = $this->request->getVar('operator_id');
        $dpkredit       = $this->request->getVar('dpkredit');
        $nama_pembeli   = $this->request->getVar('nama_pembeli');
        $email          = $this->request->getVar('email');
        $alamat         = $this->request->getVar('alamat');
        $stok           = $this->request->getVar('stok');
        $potongan       = $this->request->getVar('potongan');
        $harga_modal    = $this->request->getVar('harga_modal');
        $harga_jual     = $this->request->getVar('harga_jual');
        $bayarawal      = $this->request->getVar('bayarawal');
        $totalbayar     = $this->request->getVar('totalbayar');
        $cicilan        = $this->request->getVar('cicilan');
        $provisi        = $this->request->getVar('provisi');
        $asuransi       = $this->request->getVar('asuransi');
        $angsuran_bunga = $this->request->getVar('angsuran_bunga');
        $angsuran_pokok = $this->request->getVar('angsuran_pokok');
        $totalpinjaman  = $this->request->getVar('totalpinjaman');
        $administrasi   = $this->request->getVar('administrasi');
        $pinjamanpolis  = $this->request->getVar('pinjamanpolis');
        
        //mengambil data produk
        $produk = $this->ProdukModel->find($product_id);
        //dd($produk);
        //mengambil data simulasi kredit
        $skredit = $this->ModelSimulasiKredit->find($skredit_id);
        //dd($skredit);
        //mengambil data sales
        $sales = $this->ModelPengguna->find($sales_id);
        dd($sales);


        if($data->metodebayar == 2 ){
            if(!$this->validate([
                'metodebayar'	=> 'required|trim',
                'product_id'    => 'required|trim',
                'skredit_id'    => 'required|trim',
                'operator_id'   => 'required|trim',
                'dpkredit'	    => 'required|trim',
                'nama_pembeli'	=> 'required|trim',
                'email'         => 'required|trim',
                'alamat'	    => 'required|trim',
                'stok'	        => 'required|trim',
                'harga_modal'   => 'required|trim|numeric',
                'harga_jual'    => 'required|trim|numeric',
                'bayarawal'     => 'required|trim|numeric',
                'totalbayar'    => 'required|trim|numeric'
            ])){
                //session();
                $data1['validation'] = \Config\Services::validation();
                //dd($validation);
                $session = session()->get('username');
                if(!empty($session)){
                    return redirect()->to('/TransaksiController/create')->withInput();
                }else{
                session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
                    return redirect()->to('/');
                }
            }else{

                //save data pembeli dahulu
                $dataPembeli = [
                    'skredit_id' => $skredit_id,
                    'fullname'   => $nama_pembeli,
                    'email'      => $email,
                    'alamat'     => $alamat
                ];

                $dataSavePembeli = $this->ModelCustomer->insert($dataPembeli);

                //update data produk
                $dataProduk = [
                    'stok'       => $stok - 1,
                    'updated_at' => time()
                ];
                $dataSaveProduk = $this->ProdukModel->update($product_id, $dataProduk);

                //save data Detail Transaksi
                $dataTransaksi = [
                    'invoice'	    => 'INV/EXPS/'.date('Y/m/d/H/i/s'),
                    'metodebayar'	=> $metodebayar,
                    'product_id'    => $product_id,
                    'skredit_id'    => $skredit_id,
                    'operator_id'   => $operator_id,
                    'sales_id'      => $sales_id,
                    'dpkredit'	    => $dpkredit,
                    'id_pembeli'	=> $dataSavePembeli->id,
                    'bayarawal'     => $bayarawal,
                    'totalbayar'    => $totalbayar,
                    'created_at'	=> time(),
                ];
                
                $dataSaveTransaksi = $this->ModelTransaksi->insert($dataTransaksi);

                //save data Detail Credit
                $dataCredit = [
                    'id_transaksi'	=> $dataSaveTransaksi->id,
                    'product_id'    => $product_id,
                    'skredit_id'    => $skredit_id,
                    'operator_id'   => $operator_id,
                    'sales_id'      => $sales_id,
                    'dpkredit'	    => $dpkredit,
                    'id_pembeli'	=> $id_pembeli,
                    'bayarawal'     => $bayarawal,
                    'totalbayar'    => $totalbayar,
                    'cicilan'       => $cicilan,
                    'provisi'       => $provisi,
                    'asuransi'      => $asuransi,
                    'angsuran_bunga'=> $angsuran_bunga,
                    'angsuran_pokok'=> $angsuran_pokok,
                    'totalpinjaman' => $totalpinjaman,
                    'pinjampolis'   => $pinjamanpolis,
                    'created_at'	=> time(),
                ];

                $dataSaveCredit= $this->ModelCreditDetail->insert($dataCredit);
    
                session()->setFlashdata('success', 'Tambah Data Produk Berhasil');
                return redirect()->to(base_url('/KreditController/'));
            }
         }else{


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

            //
            $pembayaran = $this->request->getVar('pembayaran');
            $hargamobil = $this->request->getVar('hargaJual');
            $skreditDp  = $this->request->getVar('skreditDp');
            $id = $this->request->getVar('id_skredit');
            
            //dd($id);
            if(!empty($id)){
                // mengambil data simulasi kredit berdasarkan id
              $simulasi_kredit = $this->ModelSimulasiKredit->find($id);
              

            }
           // $data = 0;
            if($pembayaran == 2){
                //menghitung total pinjaman // total harga - total dp
                $totalpinjaman = $hargamobil - $skreditDp;
                //menghitung angsuran pokok perbulan
                $angsuranpokok = $totalpinjaman / $simulasi_kredit->tenor;
                // menghitung bunga pinjaman
                $bungapinjaman = $totalpinjaman * $simulasi_kredit->bunga_pinjaman / 100;
                //menghitung angsuran bunga perbulan selama total pertahun
                $angsuranbunga = $bungapinjaman / 12;
                //menghitung jumlah cicilan perbulan
                $cicilan = $angsuranpokok + $angsuranbunga;

                //menghitung asuransi dealer// persen dari harga mobil
                $asuransidealer = $hargamobil * $simulasi_kredit->asuransi /100;
                //menghitung provisi atau bayar pinjaman awal // persen dari total pinjaman
                $provisi = $totalpinjaman * $simulasi_kredit->provisi /100;
                // asuransi polisi
                $asuransipolisi = $simulasi_kredit->polis_asuransi;
                // biaya admin 
                $administrasi = $simulasi_kredit->administrasi;


                //data yang dikirim
                $data = [
                    'cicilan'         => $cicilan,
                    'asuransi'        => $asuransidealer,
                    'provisi'         => $provisi,
                    'angsuran_bunga'  => $angsuranbunga,
                    'angsuran_pokok'  => $angsuranpokok,
                    'totalpinjam'     => $totalpinjaman,
                    'administrasi'    => $administrasi,
                    'asuransipolis'   => $asuransipolisi,
                    'dp'              => $skreditDp,
                    //subtotal // dp + cicilan perbulan + asuransi + provisi + administrasi + polis asuransi
                    'subtotal'        => $skreditDp + $cicilan + $asuransidealer + $provisi + $administrasi + $asuransipolisi
                ];
                
                echo json_encode($data);

            }else{
                 //asuransi
                $asuransi = $hargamobil * 5 /100;
                 //data yang dikirim
                 $data = [
                    'asuransi'        => $asuransi,
                    'administrasi'    => 700000,
                    'asuransipolis'   => 40000,
                    'subtotal'        => $hargamobil + $asuransi + 700000 + 40000
                ];
                echo json_encode($data);
                
            }
        }
    }

    public function getTotalWithAjax()
    {
        if($this->request->isAJAX()){
            $sub = $this->request->getVar('sub');
            $pot = $this->request->getVar('pot');
    
            $data = $sub - $pot;

            }
            echo json_encode($data);
    }
}
