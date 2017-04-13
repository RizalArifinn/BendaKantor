<?php


    require 'Botol.php';


    $botol = new Botol();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Botol</h4>';


    $botol->bahan = '<i>Bahan</i> -> Plastik';
    $botol->warna = '<i>Warna</i> -> Bening';
    $botol->jenis = '<i>Jenis</i> -> Botol Minum';


    echo $botol->bahan.'<br>';
    echo $botol->warna.'<br>';
    echo $botol->jenis.'<br><br>';


    echo $botol->kosong().'<br>';
    echo $botol->isi();
