<?php
use PHPUnit\Framework\TestCase;
include("m_prediksi.php");
require_once "hitungHPL.php";
class queryTest extends TestCase{
   
    function execute2($query){
        return mysqli_query($this->connect->getConnection(),$query);
        } 
    public function testInsert(){
        $objek1=new m_prediksi;
        $dummyNama="ratna";
        $dummyHpht="2020-11-15";
        $dummyPredict="2021-08-22";
        $dummyRes=$objek1->insert_hpl($dummyNama,$dummyHpht);
        $delete=$objek1->delete_hpl(0);
        $pilih=$objek1->selectAll();
        $arrayAssoc=mysqli_fetch_assoc($pilih);
        $this->assertEquals($dummyPredict,$arrayAssoc['prediksi']); 
    }
    
    public function testHitung(){
        $dummyHitung=new hitungHPL();
        $tglSalah="2021-02-22";
        $tglBenar="2021-02-22";
        $res1=$dummyHitung->hitung($tglSalah);
        $res2=$dummyHitung->hitung($tglBenar);
        $correctRes="2021-12-01";
        $this->assertIsString($res1);
        $this->assertEquals($correctRes,$res1);
        $this->assertEquals($correctRes,$res2);
    }
}