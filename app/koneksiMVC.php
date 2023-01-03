<?php
class koneksiMVC{
    public $mysqli;
    public function __construct(){
    $this->mysqli = new mysqli('localhost', 'root', 'raya2002','hpl');
    }
    public function getConnection(){
        return $this->mysqli;
    }
}
