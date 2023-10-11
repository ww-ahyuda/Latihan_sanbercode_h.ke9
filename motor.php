<?php
require_once('kendaraan.php');
 class motor extends kendaraan
 {
    public $roda= 2;
    public $jump= "Hop";
    public function jalan()
    {
        echo "Sedang dalam perjalanan";
    }
 }