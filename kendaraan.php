<?php
    class kendaraan
    {
        public $name;
        public $roda= 2;
        public $no = "true";
        public function  __construct($string)
        {
            $this ->name = $string;
        }
    }