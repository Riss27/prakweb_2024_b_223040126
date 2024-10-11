<?php 

define('NAMA', 'Muhammad Faris');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;
echo "<hr>";

class Coba {
    const NAMA = 'Muhammad Faris';
}

echo Coba::NAMA;
echo "<hr>";

// Magic Constant
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
echo "<hr>";


function coba() {
    return __FUNCTION__;
}

echo coba();
echo "<hr>";

class Coba2 {
    public $kelas = __CLASS__;
}

$obj = new Coba2;
echo $obj->kelas;


