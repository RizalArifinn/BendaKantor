<?php


    require 'Bak_Air.php';


    $bak = new BakAir();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Bak Air</h4>';


    $bak->bahan = '<i>Bahan</i> -> Plastik Pilihan';
    $bak->warna = '<i>Warna</i> -> Hitam';
    $bak->merk = '<i>Merk</i> -> Bak Dor';
    $bak->ukuran = '<i>Ukuran</i> -> Sedang';


    echo $bak->bahan.'<br>';
    echo $bak->warna.'<br>';
    echo $bak->merk.'<br>';
    echo $bak->ukuran.'<br><br>';


    echo $bak->cerah().'<br>';
    echo $bak->pudar();
