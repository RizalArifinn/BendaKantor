<?php


    require 'Kunci_Motor.php';

    $kunci_m = new Kunci_M();


    echo '<h3>Benda-Benda Di Kantor</h3>';
    echo '<h4>Kunci Motor</h4>';



    $kunci_m->merk = '<i>Merk</i> -> Honda';
    $kunci_m->panjang = '<i>Panjang</i> -> 3,5 cm';




    echo $kunci_m->merk.'<br>';
    echo $kunci_m->panjang.'<br><br>';



    echo $kunci_m->panjang().'<br>';
    echo $kunci_m->pendek();
