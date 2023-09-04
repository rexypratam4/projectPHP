<?php
     date_default_timezone_set('Asia/Makassar');
     echo "Menghitung 10 hari ke belakang <br>";
     echo date("d m y", time()-60*60*24*10);
     echo " <br><br>Menghitung 10 hari ke depan <br>";
     echo date("d m y", time()+60*60*24*10);