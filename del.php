<?php

     if(isset($_GET['iddel'])) {

        $id = $_GET['iddel'];

        $sql = "DELETE from `tasks` WHERE id = ". $id;    

        mysqli_query($db, $sql);
     }      

?>
