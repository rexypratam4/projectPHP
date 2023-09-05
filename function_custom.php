<?php
    function luaspersegi($sisi ){
        $luas = $sisi * $sisi;
        return   $luas ;
    }
    function kelilingpersegi($sisi ){
        $kel = 4 * $sisi;
        return  $kel ;
    }
    function kelilinglingkaran($r ){
        $kel = 3.14 * ($r*2);
        return  $kel ;
    }
    function luaslingkaran($r ){
        $luas = 3.14 * $r*$r;
        return   $luas ;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> luas persegi = <?= luasPersegi ("10");?> </h1> 
     <h1>keliling persegi = <?= kelilingPersegi ("20");?> </h1> 
     <h1> keliling lingkaran = <?= kelilinglingkaran ("5");?> </h1> 
     <h1> luas lingkaran = <?= Luaslingkaran ("3");?> </h1> 
</body>
</html>