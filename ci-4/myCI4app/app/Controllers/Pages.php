<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {

    $data = ['title' => 'Home | WebProgramming Unpas', 'tes' => ['satu', 'dua', 'tiga']];
    return view('pages/home', $data);
  }

  public function about()
  {
    $data = ['title' => 'About | WebProgramming Unpas'];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact | WebProgramming Unpas',
      'alamat' => [
        ['tipe' => 'Rumah', 'alamat' => 'Jl. ABC No. 123', 'kota' => 'Bandung'],
        ['tipe' => 'Kantor', 'alamat' => 'Jl. Setiabudi No.193', 'kota' => 'Solo']
      ]
    ];

    return view('pages/contact', $data);
  }
}
