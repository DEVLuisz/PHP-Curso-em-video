<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>For - PHP</title>
</head>
<body>
<div>
    <?php
  for($i=1;$i <=10;$i++){
      echo "$i ";
  }
  echo "<br/>";

  for($h=10;$h>=1;$h--){
      echo "$h ";   
  }
  echo "<br/>";

  for($j=0;$j <=100;$j+=5){
  echo "$j ";
  }
  echo "<br/>";

  for($i=20;$i>=0;$i-=2){
      echo"$i ";
  }
 ?>

 <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>