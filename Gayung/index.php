<?php

    require 'Gayung.php';


    //object
    $gayung = new Gayung();

    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Gayung</h4>';

    //property
    $gayung->warna = '<i>Warna</i> -> Pink';
    $gayung->merk = '<i>Merk</i> -> GayungNasional';
    $gayung->ukuran = '<i>Ukuran</i> -> Sedang';


    //result
    echo $gayung->warna.'<br>';
    echo $gayung->merk.'<br>';
    echo $gayung->ukuran.'<br><br>';


    //show_method
    echo $gayung->ada_gambar().'<br>';
    echo $gayung->tidak_ada_gambar();
