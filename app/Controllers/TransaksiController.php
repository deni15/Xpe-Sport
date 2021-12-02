<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ProdukModel;
use App\Models\ModelTransaksi;
use App\Models\ModelCustomer;
use App\Models\ModelSimulasiKredit;
use App\Models\ModelCreditDetail;
use App\Models\ModelCashDetail;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
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
        $data['transaksi'] = $this->ModelTransaksi->getDataTransaksiAll();
       // dd($data['transaksi']);
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'List Data Transaksi';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/transaksi/dataTransaksi',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }

    public function indexcash()
    {
        $data['transaksi'] = $this->ModelTransaksi->getDataTransaksiCash();
       // dd($data['transaksi']);
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'List Data Transaksi Cash';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/transaksi/dataCash',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }

    public function indexcredit()
    {
        $data['transaksi'] = $this->ModelTransaksi->getDataTransaksiCredit();
       // dd($data['transaksi']);
        $session = session()->get('username');
		if(!empty($session)){
			$data['title'] = 'List Data Transaksi Credit';
				   echo view('template/templateAdmin/head',$data);
				   echo view('content/transaksi/dataCredit',$data);
				   echo view('template/templateAdmin/foot');
		}else{
		session()->setFlashdata('success', 'Waktu Anda telah berakhir, silahkan Masuk kembali');
			return redirect()->to('/');
		}
    }

    public function create()
    {
        $users = new ModelUser();
        $produk = new ProdukModel();
        $simulasikredit = new ModelSimulasiKredit();
        $data['users'] = $users->findAll();
        $data['skredit'] = $simulasikredit->findAll();
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
        //dd($this->request->getVar());

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
        $asuransi_bunga = $this->request->getVar('angsuran_bunga');
        $asuransi_pokok = $this->request->getVar('angsuran_pokok');
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
       // dd($sales);


        if($metodebayar == 2 ){
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
                    'skredit_id' => intval($skredit_id),
                    'customer_name'   => $nama_pembeli,
                    'email_customer'      => $email,
                    'alamat'     => $alamat
                ];

                $dataSavePembeli = $this->ModelCustomer->insert($dataPembeli);

                //dd($dataSavePembeli);

                //update data produk
                $dataProduk = [
                    'stok'       => intval($stok) - 1,
                    'updated_at' => time()
                ];
                $dataSaveProduk = $this->ProdukModel->update($product_id, $dataProduk);

                //save data Detail Transaksi
                $dataTransaksi = [
                    'invoice'	    => 'INV/EXPS/'.date('Y/m/d/H/i/s'),
                    'metode_bayar'	=> $metodebayar,
                    'id_produk'     => intval($product_id),
                    'id_skredit'    => intval($skredit_id),
                    'id_operator'   => intval($operator_id),
                    'id_sales'      => intval($sales_id),
                    'id_pembeli'	=> $dataSavePembeli,
                    'jumlah_beli'	=> 1,
                    'dpkredit'	    => intval($dpkredit),
                    'bayar_awal'    => intval($bayarawal),
                    'totalbayar'    => intval($totalbayar),
                    'created_at'	=> time(),
                ];
                //dd($dataTransaksi);
                $dataSaveTransaksi = $this->ModelTransaksi->insert($dataTransaksi);

               // dd($dataSaveTransaksi);

                //save data Detail Credit
                $dataCredit = [
                    'id_transaksi'	=> $dataSaveTransaksi,
                    'id_produk'     => intval($product_id),
                    'id_skredit'    => intval($skredit_id),
                    'id_operator'   => intval($operator_id),
                    'id_sales'      => intval($sales_id),
                    'id_pembeli'	=> $dataSavePembeli,
                    'dpkredit'	    => intval($dpkredit),
                    'jumlah_beli'   => 1,
                    'bayar_awal'    => intval($bayarawal),
                    'totalbayar'    => intval($totalbayar),
                    'cicilan'       => intval($cicilan),
                    'provisi'       => intval($provisi),
                    'asuransi'      => intval($asuransi),
                    'asuransi_bunga'=> intval($asuransi_bunga),
                    'asuransi_pokok'=> intval($asuransi_pokok),
                    'total_pinjaman'=> intval($totalpinjaman),
                    'pinjaman_polis'=> intval($pinjamanpolis),
                    'administrasi'  => intval($administrasi),
                    'created_at'	=> time(),
                ];

                $dataSaveCredit= $this->ModelCreditDetail->insert($dataCredit);
               // dd($dataSaveCredit);

                 // mangambil data
                 $product = $this->ProdukModel->find(intval($product_id));
                 $salesman = $this->ModelPengguna->find(intval($sales_id));
                 //dd($product);
                 $datastruk = [
                         'title'         =>  'Struk Transksi',
                         'invoice'       =>   $dataTransaksi['invoice'],
                         'tgl_transaksi' =>   date('d-m-y H:i:s', $dataTransaksi['created_at']),
                         'customer'      =>   $nama_pembeli,
                         'email'         =>   $email,
                         'alamat'        =>   $alamat,
                         'metodebayar'   =>   $metodebayar,
                         'nama_produk'   =>   $product->nama_produk,
                         'type_produk'   =>   $product->type_produk,
                         'warna'         =>   $product->warna,
                         'hargaItem'     =>   $product->harga,
                         'namasales'     =>   $salesman->fullname,
                         'asuransi'      =>   $asuransi,
                         'provisi'       =>   $provisi,
                         'cicilan'       =>   $cicilan,
                         'angsuran_bunga'=>   $asuransi_bunga,
                         'angsuran_pokok'=>   $asuransi_pokok,
                         'dpkredit'      =>   $dpkredit,
                         'asuransipolis' =>   $pinjamanpolis,
                         'subtotal'      =>   $bayarawal,
                         'potongan'      =>   $potongan,
                         'totalharga'    =>   $totalbayar,
                     ];
 
     
                 echo view('content/struk/struk-transksi',$datastruk);
            }
        }else{
            //pembelian cash
            if(!$this->validate([
                'metodebayar'	=> 'required|trim',
                'product_id'    => 'required|trim',
                'operator_id'   => 'required|trim',
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
                    // 'skredit_id' => intval($skredit_id),
                    'customer_name'   => $nama_pembeli,
                    'email_customer'      => $email,
                    'alamat'     => $alamat
                ];

                $dataSavePembeli = $this->ModelCustomer->insert($dataPembeli);

                //dd($dataSavePembeli);

                //update data produk
                $dataProduk = [
                    'stok'       => intval($stok) - 1,
                    'updated_at' => time()
                ];
                $dataSaveProduk = $this->ProdukModel->update($product_id, $dataProduk);

                //save data Detail Transaksi
                $dataTransaksi = [
                    'invoice'	    => 'INV/EXPS/'.date('Y/m/d/H/i/s'),
                    'metode_bayar'	=> $metodebayar,
                    'id_produk'     => intval($product_id),
                    'id_skredit'    => intval($skredit_id),
                    'id_operator'   => intval($operator_id),
                    'id_sales'      => intval($sales_id),
                    'id_pembeli'	=> $dataSavePembeli,
                    'jumlah_beli'	=> 1,
                    'bayar_awal'    => intval($bayarawal),
                    'totalbayar'    => intval($totalbayar),
                    'created_at'	=> time(),
                ];
                //dd($dataTransaksi);
                $dataSaveTransaksi = $this->ModelTransaksi->insert($dataTransaksi);

               // dd($dataSaveTransaksi);

                //save data Detail Credit
                $dataCash = [
                    'id_transaksi'	=> $dataSaveTransaksi,
                    'id_produk'     => intval($product_id),
                    'id_operator'   => intval($operator_id),
                    'id_sales'      => intval($sales_id),
                    'id_pembeli'	=> $dataSavePembeli,
                    'jumlah_beli'   => 1,
                    'bayar_awal'    => intval($bayarawal),
                    'totalbayar'    => intval($totalbayar),
                    'asuransi'      => intval($asuransi),
                    'pinjaman_polis'=> intval($pinjamanpolis),
                    'administrasi'  => intval($administrasi),
                    'created_at'	=> time(),
                ];
                //dd($dataCash);

                $dataSaveCash= $this->ModelCashDetail->insert($dataCash);
               // dd($dataSaveCredit);

                // mangambil data
                $product = $this->ProdukModel->find(intval($product_id));
                $salesman = $this->ModelPengguna->find(intval($sales_id));
                //dd($product);
                $datastruk = [
                        'title'         =>  'Struk Transksi',
                        'invoice'       =>   $dataTransaksi['invoice'],
                        'tgl_transaksi' =>   date('d-m-y H:i:s', $dataTransaksi['created_at']),
                        'customer'      =>   $nama_pembeli,
                        'email'         =>   $email,
                        'alamat'        =>   $alamat,
                        'metodebayar'   =>   $metodebayar,
                        'nama_produk'   =>   $product->nama_produk,
                        'type_produk'   =>   $product->type_produk,
                        'warna'         =>   $product->warna,
                        'hargaItem'     =>   $product->harga,
                        'namasales'     =>   $salesman->fullname,
                        'asuransi'      =>   $asuransi,
                        'asuransipolis' =>   $pinjamanpolis,
                        'subtotal'      =>   $bayarawal,
                        'potongan'      =>   $potongan,
                        'totalharga'    =>   $totalbayar,
                    ];

    
                echo view('content/struk/struk-transksi',$datastruk);
            
    
            }


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
