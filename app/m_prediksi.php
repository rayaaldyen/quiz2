<?php
require "koneksiMVC.php";
require "hitungHPL.php";
class m_prediksi{
private $nama;
private $hpht;
private $connect;
    function __construct(){
        $this->connect = new koneksiMVC();
    } 
    function execute($query){
            return mysqli_query($this->connect->getConnection(),$query);
    } 
        function selectAll(){
            $query = "SELECT * FROM prediksi";
            return $this->execute($query);
    } 
        function select($nomor){
            $query = "SELECT * FROM prediksi WHERE namaIbu='$nomor'";
            return $this->execute($query);
    } 
    function insert_hpl($nama,$hpht){
        
        $objek=new hitungHPL();
        $predict=$objek->hitung($hpht);
        $query = "INSERT INTO prediksi VALUES (1,'$nama', '$hpht', '$predict')";
        return $this->execute($query);
    }
    function delete_hpl($nomor){
        $query = "DELETE FROM prediksi WHERE nomor='$nomor'";
        return $this->execute($query);
    }
    function fetch($var){
        return mysqli_fetch_array($var);
    } 
    function __destruct(){
    }
}

