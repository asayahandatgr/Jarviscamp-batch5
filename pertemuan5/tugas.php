<?php
class Kendaraan {
    public $merk;
    public $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function info() {
        return "Merk: $this->merk, Tahun: $this->tahun";
    }
}

class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $tahun, $jenis) {
        parent::__construct($merk, $tahun);
        $this->jenis = $jenis;
    }

    public function infoMobil() {
        return parent::info() . ", Jenis: $this->jenis";
    }
}

$mobilBaru = new Mobil("Toyota", 2020, "SUV");

echo $mobilBaru->infoMobil();

?>
