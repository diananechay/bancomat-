<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bancomat Alpha Bank</title>
</head>
<body>
<?php
  $CassNom = array(500,200,100,50,20,10,5);//номинал
  $value = $_POST['value'];
  echo "Сумма - ".$value."<br>";
  $kol=1; //! количество купюр
  do {
    if ($value < 0) {
        echo "Wrong data! Value can not be less than 0 !!!";
        continue;
     }
     if (0 != $value %5) {
         echo "Wrong data! Value not multiple 5!";
         continue;
     }
      if ($value > 5000) {
          echo "Wrong data! Value can not be more than 5000 !!!";
          continue;
      }

      for ( $i = 0; $i < 7; ++$i) {
       $kol = $value / $CassNom[$i];
       $kol= floor($kol);
          if($kol!=0)
          {
                echo  "<br/>".$kol." x ".$CassNom[$i] ;
          }
        $value -=  $kol * $CassNom[$i];
      }
 } while (false);
 echo "<br/>"."<br/>";
?>
<a href="form.php" class="c"> Back</a>
<style>
.c {
border: 1px solid #333; /* Рамка */
display: inline-block;
padding: 5px 10px; /* Поля */
text-decoration: none; /* Убираем подчёркивание */
color: #000; /* Цвет текста */
 box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
 background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */

}

</style>
</body>

