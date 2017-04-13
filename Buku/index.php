<?php

    require 'Buku.php';


    $buku = new Buku();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Buku</h4>';

    $buku->judul = '<i>Judul</i> -> Buku saya buku bendera';
    $buku->penulis = '<i>Penulis</i> -> Saya San';
    $buku->penerbit = '<i>Penerbit</i> -> Saia Mega Bintang';
    $buku->warna = '<i>Warna</i> -> Biru Putih';


    echo $buku->judul.'<br>';
    echo $buku->penulis.'<br>';
    echo $buku->penerbit.'</br>';
    echo $buku->warna.'<br><br>';


    echo $buku->rapi().'<br>';
    echo $buku->semburat();
