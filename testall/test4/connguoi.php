<?php

class connguoi{
    public $CCCD, $Ten, $QueQuan;

    public function __construct($a,$b,$c)
    {
        $this->CCCD = $a;
        $this->Ten = $b;
        $this->QueQuan = $c;
    }

    public function show(){
        echo "connguoi";
    }
}