<?php
class koneksii{
    private $host = "localhost";
    private $user = "wstifai3_suket-kel";
    private $db="wstifai3_suket-kel";
    private $pass="Polije1234";
    protected $koneksi;

    public function __construct()
    {
        try{
            $this->koneksi = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $this->koneksi;
    }
}

?>