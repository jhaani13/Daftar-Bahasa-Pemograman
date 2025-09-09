<?php 

class BahasaModel extends Connection 
{
    protected function findAll()
    {
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0){
            while ($data = mysqli_fetch_assoc($result)){
                $users[] = $data;
            }
            return $users;
        }
    }

    protected function findone($id){
        $sql = "SELECT FROM users WHERE id = " . $id;
        $result = $this->connect()-> query($sql);
        if ($result->num_rows > 0){
            while ($data = mysqli_fetch_assoc($result)){
                $users[] = $data;
            }
            return $users;
        }

    }
}




?>