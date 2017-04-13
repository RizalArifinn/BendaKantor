<?php

    require 'Flashdisk.php';


    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Flashdisk</h4>';


    $fd = new FD();


    $fd->merk = '<i>Merk</i> -> Toshiba';
    $fd->warna = '<i>Warna</i> -> Putih';
    $fd->kapasitas = '<i>Kapasitas</i> -> 8GB';
    $fd->kecepatan = '<i>Kecepatan</i> -> 2Mbps';


    echo $fd->merk.'<br>';
    echo $fd->warna.'<br>';
    echo $fd->kapasitas.'<br>';
    echo $fd->kecepatan.'<br><br>';


    echo $fd->baru().'<br>';
    echo $fd->lama();
