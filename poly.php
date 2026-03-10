<?php

// Parent Class
class Hewan {
    public function suara() {
        echo "Hewan mengeluarkan suara";
    }
}

// Subclass Kucing yang melakukan overriding pada method suara
class Kucing extends Hewan {
    public function suara() {
        echo "Meong";
    }
}

// Subclass Anjing yang melakukan overriding pada method suara
class Anjing extends Hewan {
    public function suara() {
        echo "Guk Guk";
    }
}

// --- Proses Instansiasi dan Pemanggilan (dari slide kedua) ---

$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara(); // Output: Meong
echo "<br>";

$anjing->suara(); // Output: Guk Guk
8
?>