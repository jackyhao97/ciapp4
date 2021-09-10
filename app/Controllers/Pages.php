<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{    
    $data = [
      'title' => 'Home | Jacky'      
    ];
		
		return view('pages/home', $data);
	}

  public function about()
  {
    $data = [
      'title' => 'About | Jacky'
    ];
    
    return view('pages/about', $data);    
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us | Jacky',
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl abc No 123',
          'kota' => 'Medan'
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'Jl xyz No 456',
          'kota' => 'Medan'
        ]
      ]
    ];

    return view('pages/contact', $data);
  }
}
