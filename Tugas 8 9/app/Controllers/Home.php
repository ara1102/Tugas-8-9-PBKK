<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = array(
            'nama' => 'Adhira Riyanti Amanda',
            'matkul' => 'Pemrograman Berbasis Kerangka Kerja',
            'kelas' => 'B',
            'bahasa' => 'PHP',
            'framework' => 'Code Igniter'
        );
        return view('welcome_message', $data);
    }
}
