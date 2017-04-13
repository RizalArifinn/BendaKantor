<?php


    require 'Shower.php';


    $shower = new Shower();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Shower</h4>';


    $shower->bahan = '<i>Bahan</i> -> Aluminium';
    $shower->warna = '<i>Warna</i> -> Perak';
    $shower->merk = '<i>Merk</i> -> American Standart';
    


    echo $shower->bahan.'<br>';
    echo $shower->warna.'<br>';
    echo $shower->merk.'<br><br>';


    echo $shower->lancar().'<br>';
    echo $shower->pedot2();
