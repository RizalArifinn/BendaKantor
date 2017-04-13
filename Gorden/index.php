<?php

    require 'Gorden.php';


    //object
    $green = new Gorden();

    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Gorden</h4>';

    //property
    $green->warna = '<i>Warna</i> -> Hijau';
    $green->kain = '<i>Kain</i> -> Kain dari serat tumbuhan';
    $green->ukuran = '<i>Ukuran</i> -> 3x5 m';


    //result
    echo $green->warna.'<br>';
    echo $green->kain.'<br>';
    echo $green->ukuran.'<br><br>';


    //show_method
    echo $green->gantung().'<br>';
    echo $green->lipat();
