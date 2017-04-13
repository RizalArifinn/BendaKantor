<?php

    require 'Gelas.php';


    //object
    $myglass = new Gelas();

    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Gelas</h4>';

    //property
    $myglass->warna = '<i>Warna</i> -> Bening';
    $myglass->bahan = '<i>Bahan</i> -> Kaca';
    $myglass->jenis = '<i>Jenis</i> -> Ada Pegangannya';


    //result
    echo $myglass->warna.'<br>';
    echo $myglass->bahan.'<br>';
    echo $myglass->jenis.'<br><br>';


    //show_method
    echo $myglass->terbalik().'<br>';
    echo $myglass->tengkurap();
