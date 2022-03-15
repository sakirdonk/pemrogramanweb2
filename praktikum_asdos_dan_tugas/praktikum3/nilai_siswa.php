<?php
// letakan di paling atas file
require_once 'libfungsi.php';

// kode lainnya logik program anda
// $_nilai = total nilai

$hasil_ujian = kelulusan(60);
$nilai = grade(60);
$peringkat = predikat(60);
echo 'DINYATAKAN.................: ' . $hasil_ujian;
echo "<br>";
echo 'DENGAN NILAI YANG..: ' . $nilai;
echo "<br>";
echo 'DENGAN PERINGKAT...: ' . $peringkat;
