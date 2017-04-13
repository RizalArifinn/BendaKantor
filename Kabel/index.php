<?php


    require 'Kabel.php';


    $kabel = new Kabel();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Kabel</h4>';


    $kabel->bahan = '<i>Bahan</i> -> Plastik Pilihan';
    $kabel->warna = '<i>Warna</i> -> Hitam';
    $kabel->merk = '<i>Merk</i> -> Kabelku';
    $kabel->jenis = '<i>Jenis</i> -> Kabel Rumahan';


    echo $kabel->bahan.'<br>';
    echo $kabel->warna.'<br>';
    echo $kabel->merk.'<br>';
    echo $kabel->jenis.'<br><br>';


    echo $kabel->elastis().'<br>';
    echo $kabel->pedotanorrantas();
