<?php
class Kendaraan {
    private $warna;

    public function setWarna($wrn) {
        $this->warna = $wrn;
    }

    public function info() {
        echo "Kendaraan berwarna " . $this->warna;
    }
}
class Mobil extends Kendaraan {
    public $jenis;

    public function setJenis($jns) {
        $this->jenis = $jns;
    }

    public function info() {
        parent::info();
        echo " dan jenis " . $this->jenis;
    }
}

$mobilSaya = new Mobil();
$mobilSaya->setWarna("Merah");
$mobilSaya->setJenis("SUV");
$mobilSaya->info(); // Output: Kendaraan berwarna Merah dan jenis SUV