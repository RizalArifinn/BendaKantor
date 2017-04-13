<?php


    require 'Genteng.php';


    $genteng = new Genteng();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Genteng</h4>';


    $genteng->bahan = '<i>Bahan</i> -> Tanah Liat';
    $genteng->warna = '<i>Warna</i> -> Orange/Oren';
    $genteng->merk = '<i>Merk</i> -> Sumber Sari';


    echo $genteng->bahan.'<br>';
    echo $genteng->warna.'<br>';
    echo $genteng->merk.'<br><br>';


    echo $genteng->cerah().'<br>';
    echo $genteng->pudar();
