<?php 

$panjang 	= "Budi";
$lebar		= "Susi";

$luas = $panjang . "&nbsp;&nbsp;&nbsp;" . $lebar;
echo ($luas) . "<br>";

$angka = 10;

echo $angka == 11;
var_dump($angka == 10);

$sifat = "rajin";
var_dump($sifat != "malas");
var_dump(true || true) . "<br>";

$angka1	= 25;
$angka2	= 45;

if ($angka1 >= 25 && $angka2 == 45) {
	echo "Kondisi Benar";
}
else {
	echo "Kondisi Salah";
}
echo "<br>";

function barisbaru()
{
 	echo "<br>";
}

echo "test"; 
barisbaru();
echo "function";
barisbaru();

function kenalkan($nama)
{
	echo "Halo Nama Saya" . $nama ;
}
kenalkan("Aldo");
barisbaru();

function nama_kapital($nama)
{
	return ucwords($nama) ;
}

$nama_lengkap = nama_kapital("leonaldo");
echo $nama_lengkap;
barisbaru();

function nama_kapital2($nama, $asal)
{
	return ucwords($nama) ;
}
barisbaru();
$nama_lengkap = nama_kapital2("leonaldo" , null);
echo $nama_lengkap;
barisbaru(); barisbaru();

for ($i=1; $i >=-5 ; $i--) { 
	echo "ini adalah looping ke $i <br>";
}


 ?>
