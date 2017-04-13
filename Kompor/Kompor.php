<?php

    class Kompor
    {

    	public $warna;
    	public $merk;
    	public $buatan;
        public $l_api;



    	public function on()
    	{
    		return 'Kompor sedang digunakan';
    	}

    	public function off()
    	{
    		return 'Kompor tidak sedang digunakan';
    	}
    	
    }
