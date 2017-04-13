<?php

    require 'Piring.php';


    $piring = new Piring();


    echo '<h3>Barang Kantor</h3>';
    echo '<h4>Piring</h4>';


    $piring->warna = '<i>Warna</i> -> Hijau';
    $piring->bahan = '<i>Bahan</i> -> Porselen';
    $piring->motif = '<i>Motif</i> -> Polos';


    echo $piring->warna.'<br>';
    echo $piring->bahan.'<br>';
    echo $piring->motif.'<br><br>';


    echo $piring->kotor().'<br>';
    echo $piring->bersih();
