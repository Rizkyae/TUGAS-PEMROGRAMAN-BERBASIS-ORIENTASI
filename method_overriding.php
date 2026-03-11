<?php
class Hewan {
    public function suara() {
        echo "Hewan mengeluarkan suara";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Guk Guk";
    }
}

// Pemanggilan
$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara(); // Output: Meong
echo "<br>";
$anjing->suara(); // Output: Guk Guk
?>
