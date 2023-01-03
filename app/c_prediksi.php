<?php
include("m_prediksi.php");
class c_prediksi {
 public $model;
    function __construct(){
        $this->model = new m_prediksi(); 
    }
    
    function viewSimulasi(){
        $data = $this->model->selectAll();
        include "v_simulasi.php"; 
    }
    function Inserth(){
        
        $nama = $_POST['name'];
        $hpht = $_POST['hpht'];
        $count = $this->model->insert_hpl($nama,$hpht);
        header("location:index.php");
        return true;
    }
    function delete($nomor){
        $delete_data = $this->model->delete_hpl($nomor);
        header("location:index.php");
        return true;
    }
   
    public function __destruct(){
    }
}