<?php
//cara membuat fungsi
//function  namafungsi(parameter){
//  code disini   
//}

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah :". luaspersegi(10);
echo "<br>";

//bikin fungsi nama

function nama(){
    echo "Nama saya adalah Muhammad Raihan";
}

nama();
echo "<br>";

//function menggunakan parameter
//parameter default

function perkenalan($nama = "Raihan"){
    echo "Perkenalkan nama Saya :". $nama;
}

perkenalan();
?>