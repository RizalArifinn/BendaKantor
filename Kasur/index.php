<?php
    
    require 'Kasur.php';

    $kasur = new Kasur();


    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Kasur</h4>';


    $kasur->merk = '<i>Merk</i> -> Bella';
    $kasur->warna = '<i>Warna</i> -> Hijau';
    $kasur->jenis = '<i>Jenis</i> -> Kasur Lantai';


    echo $kasur->merk.'<br>';
    echo $kasur->warna.'<br>';
    echo $kasur->jenis.'<br><br>';


    echo $kasur->plastik().'<br>';
    echo $kasur->plastik_ilang();
