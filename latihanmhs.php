<?php

// Parent Class
class BangunDatar {
    public function hitungLuas() {
        return 0;
    }
}

// Child Class - Persegi
class Persegi extends BangunDatar {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

// Child Class - Lingkaran
class Lingkaran extends BangunDatar {
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function hitungLuas() {
        return 3.14 * $this->jari_jari * $this->jari_jari; // Menggunakan Pi = 3.14
    }
}

// Child Class - Segitiga
class Segitiga extends BangunDatar {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

// --- Contoh Pemanggilan ---
$persegi = new Persegi(5);
$lingkaran = new Lingkaran(10);
$segitiga = new Segitiga(6, 8);

echo "Luas Persegi: " . $persegi->hitungLuas() . "<br>";
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";

?>