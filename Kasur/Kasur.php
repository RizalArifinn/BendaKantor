<?php

    class Kasur
    {

        public $merk;
        public $warna;
        public $jenis;


        public function plastik()
        {
        	return 'Kasur masih baru/baru dipakai';
        }


        public function plastik_ilang()
        {
        	return 'Kasur sudah lama/bekas';
        }

    }
