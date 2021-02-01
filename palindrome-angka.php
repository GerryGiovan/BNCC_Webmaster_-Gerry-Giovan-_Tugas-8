<?php 

function palindrome_angka($angka) {
    // tulis kode di sini
    if ($angka <9) {
        return $angka + 1;
    }
    else {
        $temp = $angka;   
        $new = 0;   
        while (floor($temp)) {   
            $d = $temp % 10;   
            $new = $new * 10 + $d;   
            $temp = $temp/10;   
        }   
        if ($new == $angka && $angka < 10){   
            echo $angka;   
        } 
        else{ 
            echo palindrome_angka($angka + 1). "<br>";
            return 0; 
        } 
    }  
}   



    // TEST CASES
    
    echo palindrome_angka(8); // 9
    echo palindrome_angka(10); // 11
    echo palindrome_angka(117); // 121
    echo palindrome_angka(175); // 181
    echo palindrome_angka(1000); // 1001

?>


