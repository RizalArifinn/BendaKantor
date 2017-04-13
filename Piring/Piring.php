<?php

    class Piring
    {

    	public $warna;
    	public $bahan;
    	public $motif;



    	public function kotor()
    	{
    		return 'Piring sudah digunakan';
    	}

    	public function bersih()
    	{
    		return 'Piring sudah dibersihkan';
    	}
    }
