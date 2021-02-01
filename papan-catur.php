<?php

function papan_catur($angka) {
// tulis kode di sini
for ($i = 0; $i < $angka; $i++){
    if ($i%2 == 1){
        for ($x = 1; $x < $angka; $x++){
            echo "# ";
        }
    }
    else {
        for ($x = 1; $x <= $angka; $x++){
            echo " #";
        }        
    }
    echo "<br>"; 
}

}

// TEST CASES
echo papan_catur(4)."<br>";
/*
# # # #
# # #
# # # #
# # #
*/

echo papan_catur(8)."<br>";
/*
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
*/
echo papan_catur(5)."<br>";
/*
# # # # #
# # # #
# # # # #
# # # #
# # # # #
*/