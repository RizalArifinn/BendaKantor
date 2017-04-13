<?php

    require 'Kloset.php';


    $kloset = new Kloset();

    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Kloset</h4>';

    
    $kloset->warna = '<i>Warna</i> -> Hijau';
    $kloset->ukuran = '<i>Ukuran</i> -> 3x5 m';
    $kloset->merk = '<i>Merk</i> -> American Standart';


    echo $kloset->warna.'<br>';
    echo $kloset->ukuran.'<br>';
    echo $kloset->merk.'<br><br>';



    echo $kloset->bersih().'<br>';
    echo $kloset->kotor();
