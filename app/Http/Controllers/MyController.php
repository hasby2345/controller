<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "nama"=>"Abdul Jaelani",
            "alamat"=>"Bandung",
            "agama"=>"islam",
            "Jk"=>"L",
            "hobi" => [
                "Futsal", "Ngurek", "Basket",
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals()
    {
        $animal = [
            "Lion", "Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animal', ['hewan' => $animal]);
    }
}
