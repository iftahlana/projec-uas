<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id4951099_def";
    private $password = "iftahtegal";
    private $db = "id4951099_toko";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
             $this->password, $this->db);
        return $hubungan;
    }

}
?>