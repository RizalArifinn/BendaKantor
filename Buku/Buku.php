<?php
    

    class Buku
    {

        public $judul;
        public $penulis;
        public $penerbit;
        public $warna;


        public function rapi()
        {
            return 'Buku tersusun rapi dan bagus';
        }


        public function semburat()
        {
        	return 'Buku semburat, tidak tersusun';
        }

    }
