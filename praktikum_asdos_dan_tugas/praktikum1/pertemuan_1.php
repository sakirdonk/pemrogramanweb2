<?php
    $nama = 'Raihan';
    $umur = 20;
    $berat = 52;

    $nama = 'Kenshin';
    echo 'Nama saya '.$nama.'<br>Umur saya '.$umur.'<br>Berat saya '.$berat;
    
    echo "<br><br>Nama saya $nama <br>Umur saya $umur <br>Berat saya $berat";

    //Variable System
    echo '<br><br>Dokumen Root '. $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';
    //Variable Konstan
    //Variable yang tidak bisa di ubah nilainya
    //define ('makanan', 'sushi');
    define ('makanan','ramen');

    echo makanan;

    //CSS dalam php
    echo '<h1 style="color:blue;">'.makanan.'</h1>';
?>