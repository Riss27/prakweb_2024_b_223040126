<?php
class Mahasiswa_model
{
  //   [
  //     "nama" => "Faris",
  //     "nrp" => "223040126",
  //     "email" => "faris@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Azhar",
  //     "nrp" => "223040077",
  //     "email" => "azhar@gmail.com",
  //     "jurusan" => "Teknik Mesin"
  //   ],
  //   [
  //     "nama" => "Fawas",
  //     "nrp" => "223040114",
  //     "email" => "fawas@gmail.com",
  //     "jurusan" => "Teknik Industri"
  //   ]
  // ];
  private $dbh;
  private $stmt;
  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=mvc';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}