<?php

    class Kertas
    {

        public $bahan;
        public $warna;
        public $jenis;




        public function bersih()
        {
        	return 'Kertas masih baru';
        }


        public function kotor()
        {
        	return 'Kertas sudah digunakan';
        }

    }
