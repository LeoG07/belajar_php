<?php
// Variabel adalah tempat penyimpanan sementara untuk mengeksekusi program
// Database adalah tempat penyimpanan permanen 
$nama1 = "Budi saya";
$nama2 = "budi";
$hasil = str_word_count($nama1);

echo strtoupper($nama1) . "<br>";
echo strtolower($nama2) . "<br>";

// . berfungsi untuk menyambungkan perintah
echo $nama1 . "<br>"; 
// menampilkan tipe data
echo $nama2 . "<br>"; 

echo strlen($nama2) . "<br>";
// tampung variabel
$output = strcmp($nama1, $nama2); 

echo "$output" . "<br>";
if ($output == 0) // ! (tidak) = 0) 
{
	echo "Tidak Sama" . "<br>";
}
else {
	echo "Sama" . "<br>";

}
echo $hasil
?>