<?php

// include "animal.php"; (sintak untuk menyisipkan file)

class Kucing {
    public $nama, $jumlah_kaki, $bisa_terbang, $bersuara;
   
}

$momo = new Kucing;
$momo->jumlah_kaki = "4";
$momo->bisa_terbang = "Tidak bisa terbang";
$momo->bersuara = "Meong";

echo "Momo Adalah Kucing <br>";
echo "Punya kaki sebanyak : ".$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya : ".$momo->bersuara."<br>";

echo "<hr>";

class Anjing {
    public $nama, $jumlah_kaki, $bisa_terbang, $bersuara;
    
}
$doggo = new Anjing;
$doggo->jumlah_kaki = "4";
$doggo->bisa_terbang = "Tidak bisa terbang";
$doggo->bersuara = "Guk-Guk";

echo "Doggo Adalah Anjing <br>";
echo "Punya kaki sebanyak : ".$doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya : ".$doggo->bersuara."<br>";

echo "<hr>";

class Elang {
    public $nama, $jumlah_kaki, $bisa_terbang, $bersuara;
}
$zya = new Elang;
$zya->jumlah_kaki = 2;
$zya->bisa_terbang = "Bisa Terbang";
$zya->bersuara = "Miiipp";

echo "Zya Adalah Elang <br>";
echo "Punya kaki sebanyak : ".$zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya : ".$zya->bersuara."<br>";

echo "<hr>";

class Angsa {
    public $nama, $jumlah_kaki, $bisa_terbang, $bersuara;
}
$masha = new Angsa;
$masha->jumlah_kaki = 2;
$masha->bisa_terbang = "Bisa Terbang";
$masha->bersuara = "Kwaak-Kwak";

echo "Masha Adalah Angsa <br>";
echo "Punya kaki sebanyak : ".$masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Suaranya : ".$masha->bersuara."<br>";
