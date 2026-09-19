<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class Base {
    public function artery () {
        echo "hello World <br>";
    }

    public function hyperlk () {
        $this->artery();
        echo '<a href="base/secondary">Ke Halaman Secondary</a> <br>';
        echo '<a href="base/testing">ke halaman testing</a>';
    }

    public function coba() {
        // Mengambil data dari tabel users di PostgreSQL
        $dataUser = DB::select('SELECT * FROM users');

        // Mengarahkan ke file view 'testing'
        return view('testing', ['users' => $dataUser]);
    }
}



