<?php

class Produk
{
    // Mendefinisikan class Produk
    public $judul,
          $penulis,
          $penerbit,
          $harga;

    // Konstruktor untuk menginisialisasi objek Produk
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Metode untuk mendapatkan label Produk
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} - {$this->harga}";
        return $str;
    }
}

// Kelas untuk mencetak informasi Produk
class CetakInfoProduk
{
    // Metode untuk mencetak info Produk dari kelas Produk
    public function cetak(Produk $Produk)
    {
        $str = $Produk->getInfoProduk();
        return $str;
    }
}

// Kelas Komik: Subkelas untuk Produk Komik
class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0)
    {
        // Memanggil konstruktor parent untuk inisialisasi nilai
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman";
        return $str;
    }
}

// Kelas Game: Subkelas untuk Produk Game
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
        return $str;
    }
}

// Membuat instance Komik dan Game
$Produk1 = new Komik("Naruto", "Masashi", "Shonen Jump", 30000, 100);
$Produk2 = new Game("Uncharted", "Neil", "Sony Computer", 30000, 50);

echo $Produk1->getInfoProduk();
echo "<br>";
echo $Produk2->getInfoProduk();
