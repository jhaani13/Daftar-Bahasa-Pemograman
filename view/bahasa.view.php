<?php

class BahasaView extends BahasaController
{
    public function show()
    {
        $users = $this->getUsers();

        foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['nama']; ?></td>
            <td><?php echo $user['pencipta']; ?></td>
            <td><?php echo $user['tahun']; ?></td>
        </tr>
        g
     <?php
    }
   
    }

    public function find()
    {
        $detailUser = $this->getUserBy(); 
        if (empty($detailUser))
            return;
        foreach ($detailUser as $detail) { ?>
            <div>
                <h3><?php echo $detail['nama']; ?></h3>
                <p>pencipta: <?php echo $detail['pencipta']; ?></p>
                <p>tahun: <?php echo $detail['tahun']; ?></p>
            </div>
            <?php
        }
    }
}

?>