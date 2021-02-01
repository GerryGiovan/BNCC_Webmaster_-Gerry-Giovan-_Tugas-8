<?php
function ubah_huruf($string){
//kode di sini

/*$arr=array('1' => "a",'2' => "b",'3' => "c",'4' => "d",'5' => "e",'6' => "f",'7' => "g",
'8' => "h",'9' => "i",'10' => "j",'11' => "k",'12' => "l",'13' => "m",'14' => "n",'15' => "o",
'16' => "p",'17' => "q",'18' => "r",'19' => "s",'20' => "t",'21' => "u",'22' => "v",'23' => "w",
'24' => "x",'25' => "y",'26' => "z",'27' => " ");*/

$arr = str_split($string);


for($i = 0; $i < strlen($string); $i++){
    echo ++$arr[$i];
}
echo "<br>";
}
// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>