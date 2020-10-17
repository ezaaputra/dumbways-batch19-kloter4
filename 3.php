<?php
function hapus_duplikat($str){
    // memberikan 1 spasi diantara huruf
    $formatted = implode(' ', str_split($str));

    // mengubah character pada string menjadi array
    $inputArray = explode(" ",$formatted); 

    // membuat array kosong
    $outputArray = array();

    foreach($inputArray as $inputArrayItem) {
        foreach($outputArray as $outputArrayItem) {
            if($inputArrayItem == $outputArrayItem) {
                continue 2;
            }
        }
        $outputArray[] = $inputArrayItem;
        echo $inputArrayItem;
    }
}

hapus_duplikat("ccbabaccffpgkkklll");
?>