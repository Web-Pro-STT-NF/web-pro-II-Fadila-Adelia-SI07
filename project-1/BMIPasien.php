<?php
class BMIPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($bmi, $tanggal, $pasien){
        $this->bmi =$bmi;
        $this->tanggal =$tanggal;
        $this->pasien =$pasien;
    }
}
?>