<?php

class Produk {
  // Deklarasi properti untuk menyimpan informasi produk
  public  $judul,
          $penulis,
          $penerbit,
          $harga;

  // Constructor untuk menginisialisasi objek Produk
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    // Mengatur nilai properti menggunakan parameter constructor
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Method untuk mendapatkan label dari produk
  public function getLabel() {
    // Mengembalikan string yang berisi penulis dan penerbit
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

$produk3 = new Produk("Dragon Ball");
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);




// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;

// $produk4 = new Produk();
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

