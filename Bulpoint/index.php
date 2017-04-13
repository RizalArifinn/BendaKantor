<?php

    require 'Bulpoint.php';


    $bulpen = new Bulpen();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Bulpoint</h4>';

    $bulpen->warna = '<i>Warna</i> -> Hitam';
    $bulpen->merk = '<i>Merk</i> -> Snowman';
    $bulpen->tinta = '<i>Tinta</i> -> Hitam';


    echo $bulpen->warna.'<br>';
    echo $bulpen->merk.'<br>';
    echo $bulpen->tinta.'<br><br>';


    echo $bulpen->hitam().'<br>';
    echo $bulpen->bm();
