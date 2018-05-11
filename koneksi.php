<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id4951099_toko";
    private $password = "id4951099_def";
    private $db = "mahasiswa";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
             $this->password, $this->db);
        return $hubungan;
    }

}
?>