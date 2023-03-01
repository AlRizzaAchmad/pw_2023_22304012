<?php
 $depan= "Al Rizza";
 $belakang= " Taofanny";
 $nilai= 1;

 while($nilai <=100){
    if ($nilai % 5 == 0 and $nilai % 3 == 0) {
        echo $depan . $belakang . "<br>";
    } elseif ($nilai % 5 == 0) {
        echo $depan . '<br>';
    } elseif ($nilai % 3 == 0) {
        echo $belakang . '<br>';
    } else {
          echo $nilai . "<br>";
    }
     $nilai ++ ;

}
?>
