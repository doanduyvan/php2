<?php

include_once "./connguoi.php";
class sinhvien extends connguoi{
    public $MSSV, $Lop;

    public function __construct($a = null,$b = null,$c = null,$d = null,$e = null)
    {
        $this->MSSV = $d;
        $this->Lop = $e;
        parent::__construct($a,$b,$c);        
    }

    public function show(){
        echo "
        <p>CCCD: $this->CCCD</p>
        <p>Ten: $this->Ten</p>
        <p>Que Quan: $this->QueQuan</p>
        <p>MSSV: $this->MSSV</p>
        <p>Lop: $this->Lop</p>
        ";
    }
}