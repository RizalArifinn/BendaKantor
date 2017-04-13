<?php


    require 'Kertas.php';


    $kertas = new Kertas();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Kertas</h4>';


    $kertas->bahan = '<i>Bahan</i> -> Pohon';
    $kertas->warna = '<i>Warna</i> -> Putih';
    $kertas->jenis = '<i>Jenis</i> -> Kertas Tulis';


    echo $kertas->bahan.'<br>';
    echo $kertas->warna.'<br>';
    echo $kertas->jenis.'<br><br>';


    echo $kertas->bersih().'<br>';
    echo $kertas->kotor();
