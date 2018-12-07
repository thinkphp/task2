<?php

   if(isset($_POST['task'])) {           

            $task = $_POST['task'];
            
            $sql = "INSERT INTO `tasks` (`id`, `task`) VALUES (NULL, '$task')";

            mysqli_query($db, $sql);           
    }

?>
