<?php

    require 'Kompor.php';


    //object
    $kompor = new Kompor();

    echo '<h3>Benda Kantor</h3>';
    echo '<h4>Kompor</h4>';

    //property
    $kompor->warna = '<i>Warna</i> -> Hitam';
    $kompor->merk = '<i>Merk</i> -> MyKompor';
    $kompor->buatan = '<i>Buatan</i> -> Maspion';
    $kompor->l_api = '<i>Lubang Api</li> -> 2';


    //result
    echo $kompor->warna.'<br>';
    echo $kompor->merk.'<br>';
    echo $kompor->buatan.'<br>';
    echo $kompor->l_api.'<br><br>';


    //show_method
    echo $kompor->on().'<br>';
    echo $kompor->off();
