<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Multiplos Parametros - PHP</title>
</head>
<body>
<div>

      <?php
  function soma(){
      $p = func_get_args(); //Pega todos os valores
      $t = func_num_args(); // Pega toda a quantia, vulgo os arrays de 0 até.. a quantia de valores colocados
      $s=0;
      for($i=0;$i<$t;$i++){
          $s = $s + $p[$i];
      }
      return $s;
  }

  $r = soma(3,5,6,7,9);
  echo "A soma dos valores é: $r";
?>
 
</div>
</body>