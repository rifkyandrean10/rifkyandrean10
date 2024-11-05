<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohController extends Controller
{
    public function tampilContoh() {
        $data = [
            'totalProducts' => 330,
            'salesToday' => 100,
            'totalRevenue' => 'Rp. 50,000,000',
            'registedUsers' => 356
        ];
        return view('contoh', $data);
    }
}
