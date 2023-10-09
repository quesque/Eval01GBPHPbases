<?php

$leNbATrouver = 2;

if($leNbATrouver==$_GET['nbATester']){
    $trouve = true; 
}
else {
    $trouve= false ; 
}
if ($trouve === "true"){
    echo "Bravo !";
}
else {
    echo "Perdu ! ";
}


