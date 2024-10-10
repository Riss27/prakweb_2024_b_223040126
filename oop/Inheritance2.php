<?php


class produk // Mendefinisikan class Produk
{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

    // Konstruktor: Digunakan untuk menginisialisasi objek produk saat dibuat.
    public function __construct($tipe, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}  {$this->harga}";
        return $str;
    }
}

// Kelas cetakInfoProduk: Kelas ini bertugas untuk mencetak informasi produk.
class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga}";
        return $str;
    }
}

// Kelas komik: Subclass dari produk untuk produk komik.
class komik extends produk
{
    public function getInfoProduk()
    {
        $str = "Komik: {$this->judul} | {$this->getLabel()} {$this->harga} - {$this->jmlHalaman} halaman";
        return $str;
    }
}

// Kelas game: Subclass dari produk untuk produk game.
class game extends produk
{
    public function getInfoProduk()
    {
        $str = "Game: {$this->judul} | {$this->getLabel()} {$this->harga} - {$this->waktuMain} jam";
        return $str;
    }
}

$produk1 = new komik("komik", "Naruto", "Masashi", "Shonen Jump", 30000, 100, 0);
$produk2 = new game("game", "Uncharted", "Neil", "Sony Computer", 30000, 0, 50);

echo $produk1->getInfoProduk();
