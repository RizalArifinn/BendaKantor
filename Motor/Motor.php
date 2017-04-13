<?php


    class Motor
    {

        public $merk;
        public $warna;
        public $tahun;



        public function bersih()
        {
        	return 'Motor sudah dicuci/dibersihkan';
        }


        public function kotor()
        {
        	return 'Motor belum dicuci/dibersihkan';
        }

    }
