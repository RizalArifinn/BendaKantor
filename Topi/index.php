<?php


    require 'Topi.php';


    $topi = new Topi();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Topi</h4>';


    $topi->bahan = '<i>Bahan</i> -> Kain';
    $topi->warna = '<i>Warna</i> -> Hitam';
    $topi->merk = '<i>Merk</i> -> Adidas';


    echo $topi->bahan.'<br>';
    echo $topi->warna.'<br>';
    echo $topi->merk.'<br><br>';


    echo $topi->cerah().'<br>';
    echo $topi->pudar();
