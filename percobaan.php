<?php  
    $nim="190102001"; 
    $nama="Budiman"; 
    $semester=6; 
    $tahun="2021/2022"; 
    $matakuliah1=array ("kodemk" => "IF3226", "namamk"=>"Pemrograman Web I","sks" =>3, "nilai"=>"A");   
    $matakuliah2=array ("kodemk" => "IF3149", "namamk"=>"Teori Game","sks" =>3,"nilai"=>"B");

print("<pre>".print_r($matakuliah,true)."</pre>"); 

?>

/* Tampilan yang diharapkan (dalam format/menggunakan <table>) 
NIM : 190102001 Nama : Budiman Semester : 6 Tahun Akademik : 2021/2022 No   Kode MK  Nama MK          SKS   Nilai ------------------------------------------ 1   IF3226   Pemrograman Web   3      A 2   IF3149   Teori Game        3      A ------------------------------------------ Indeks Prestasi (IP) = 3.50 */
