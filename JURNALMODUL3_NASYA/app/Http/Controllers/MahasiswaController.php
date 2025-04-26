<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object)[
            'nama' => "Renasya Cahyha Handayani",
            'nim' => "102022300290",
            'email' => "renachyanii@student.telkomuniversity.ac.id",
            'jurusan' => "S1 Sistem Informasi",
            'fakultas' => "Fakultas Rekayasa Industri",
            'foto' => 'images/pasfoto.png'
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);

    

    }
}
