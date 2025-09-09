<?php
include_once __DIR__ . "/../model/bahasa.model.php";

class BahasaController extends BahasaModel
{
    public function getUsers()
    {
        return $this->findAll();
    }

    public function getUsersId()
    {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if ($onlyId !== ""){
            return $this->findone($_GET['id']);
        }
    }
}


?>