<?php
function connectdb():msqli{
    $db = mysqli_connect("localhost","root", " ", "bienesraices" );

    if ($db) {
     echo " connected";
    } else { 
        echo "NOT connected";
     }   
     return $db ;    
    } 
?>