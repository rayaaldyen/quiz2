<?php
class hitungHPL{
    function hitung($tglHpt){
        $penambahanTahun= date('Y-m-d', strtotime('+1 year', strtotime($tglHpt)));
        $penambahanHari= date('Y-m-d', strtotime('+7 days', strtotime($penambahanTahun)));
        $prediksiLahir= date('Y-m-d', strtotime('-3 month', strtotime($penambahanHari)));
        return $prediksiLahir;
    }
}