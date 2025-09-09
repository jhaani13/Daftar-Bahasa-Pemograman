<?php
class connection
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "daftar_bahasa_pemograman";

    public function connect()
    {
        return new mysqli ($this->hostname, $this->username, $this->password, $this->database);
    }
}


?>