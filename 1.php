<?php
function cetak_gambar($panjang){
    if ($panjang % 2 == 0) {
        echo "Angka harus ganjil";
    }else {
        // menentukan panjang baris vertikal
        for ($i=0; $i < $panjang; $i++) { 
            // menentukan panjang baris horizontal
            for ($j=0; $j < $panjang; $j++) { 
                // mencari posisi tengah baris vertikal
                if ($i!=($panjang-1)/2) {
                    // mencari ujung kiri dan kanan baris horizontal
                    if ($j==0 || $j==$panjang-1) {
                        echo "* ";
                    }else {
                        echo "= ";
                    }
                }else {
                    echo "* ";
                }
            }
            echo "<br>";
        }
    }
}

// PEMANGGILAN FUNGSI
cetak_gambar(5)
?>