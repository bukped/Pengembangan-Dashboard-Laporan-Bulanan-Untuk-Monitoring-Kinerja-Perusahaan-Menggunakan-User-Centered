<?php

// ini komentar satu baris

 /*

 ini adalah komentar untuk kalimat lebih
 dari satu bari 

 */

// Booleans - Tipe data Booleans berupa nilai true atau false. 

$aktif = false;
if (date('Y-m-d') > "2017-12-1") {
$aktif = true;
}
if ($aktif) {
echo 'aktif';
}


// array
$array = array('Kuliah', 'Lulus');
print_r($array);

//objek
class User {
    //script
    }
    $obj = new User; // Variabel $obj berisi data dengan tipe objek

//syntax dasar
echo 'Hallo Selamat Pagi';

$nama  = "Abdul";
echo $nama;
?>
//html
<!DOCTYPE html>
<html>
<body>
<head>
           <style>
        h2{  
        color:white;  
        background-color:red;  
        padding:5px;  
        }  
        p{  
        color:blue;  
        }       
    </style>
    <?php 
    echo "<h1>Selamat Datang</h1>";
     ?>
</body>
</html>

