<?php
$nilai = 95;

$keterangan = "";

if($nilai > 90) {
    $keterangan = "Lu jago cuy";
}elseif($nilai > 70 && $nilai <= 90) {
    $keterangan = "Belajar yg bener";
}else {
    $keterangan = "Surrend aja";
}

echo $keterangan;