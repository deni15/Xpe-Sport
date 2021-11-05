<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		echo view('template/frontendTemplate/header',$data);
		echo view('frontend/index');
		echo view('template/frontendTemplate/footer');
	}

	public function vehicles()
	{
		$data = [
			'title' => 'Our Vehicles',
			'judul'	=> 'Our Vehicles'
		];
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

}
