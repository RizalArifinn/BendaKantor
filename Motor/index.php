<?php

    
    require 'Motor.php';


    $motor = new Motor();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Motor</h4>';


    $motor->merk = '<i>Merk</i> -> Megapro';
    $motor->warna = '<i>Warna</i> -> Hitam';
    $motor->tahun = '<i>Tahun</i> -> 2008';


    echo $motor->merk.'<br>';
    echo $motor->warna.'<br>';
    echo $motor->tahun.'<br><br>';


    echo $motor->bersih().'<br>';
    echo $motor->kotor();
