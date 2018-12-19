<?php

    $link = mysqli_connect("localhost", "root", "mysql", "secretdi");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>