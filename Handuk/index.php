<?php

    require 'Handuk.php';


    $handuk = new Handuk();


    echo '<h3>Barang Kantor</h3>';
    echo '<h4>Handuk</h4>';


    $handuk->warna = '<i>Warna</i> -> Biru';
    $handuk->bahan = '<i>Bahan</i> -> Serat Kain';
    $handuk->merk = '<i>Merk</i> -> HandukBersihBadan';


    echo $handuk->warna.'<br>';
    echo $handuk->bahan.'<br>';
    echo $handuk->merk.'<br><br>';



    echo $handuk->gantung().'<br>';
    echo $handuk->lipat();
