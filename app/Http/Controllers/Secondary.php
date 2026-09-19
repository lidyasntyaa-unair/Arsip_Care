<?php

namespace App\Http\Controllers;

class secondary extends Base {
    public function secondary_isi () {
        echo "hello Dunia <br>";
        $this->artery();
        echo "Siapapun <br>";
        echo "<a href='/base'>Ke halaman Utama</a>";
    }

    public function testing () {
        return view('beranda');

    }
}
