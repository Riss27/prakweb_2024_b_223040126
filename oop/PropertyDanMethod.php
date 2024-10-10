<?php 

class Produk {
  // Deklarasi properti yang akan digunakan untuk menyimpan informasi produk
  public  $judul = "judul",
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0;

  // Method untuk mendapatkan label produk (penulis dan penerbit)
  public function getLabel() {
    return "$this->penulis, $this->penerbit"; // Mengembalikan string yang berisi penulis dan penerbit
  }
}

// Membuat objek produk3 dari kelas Produk
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// Membuat objek produk4 dari kelas Produk
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// Menampilkan informasi tentang produk3 (komik)
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



// public function sayHello() {
          //   return "Hello World!";
          // }
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";