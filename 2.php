<?php
function kebalikan($arrays){
    $arrayBaru = array();
    for($i=count($arrays)-1; $i >= 0; $i--) {
        array_push($arrayBaru, $arrays[$i]);
    }

    for ($i=0; $i < count($arrayBaru); $i++) { 
        echo $arrayBaru[$i];
    }
}

$arrays = array(19,22,3,28,26,17,18,4,28,0);
kebalikan($arrays);
?>