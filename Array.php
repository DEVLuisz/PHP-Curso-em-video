<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Array - PHP</title>
</head>
<body>
<div>
    <pre>
    <?php
    echo "<h3>Ksort - Krsort</h3> <br/>";
    $l = array(2=>"T",
               5=>"H",
               0=>"I",
               3=>"E",
               4=>"M",
               1=>"I");
               print_r($l);
               echo "<h3>Ksort</h3> <br/>";
               ksort($l); //Ksort alinha os indices de forma crescente.
               print_r($l);
               echo "<h3>Krsort</h3> <br/>";
               krsort($l);
               print_r($l);
    echo "<br/>";
    echo"<h3>Foreach e Range</h3> <br/>";
    $c = range(5,20,2);
foreach($c as $v){
    echo "$v ";
}
echo  "<br/>";
//Array com mais valores - Homogeneos
echo "<h3>Array e Foreach </h3>";
$h = array("nome"=> "Luís",
            "idade" => 21,
            "peso" => 50.04 );
            foreach($h as $k => $h1){
                echo "O campo $k possui o conteudo $h1 <br/>";
            }
            echo  "<br/>";
//--Unset
$a= array( 9 =>5,
           3=>7,
           1=> 10,
            6=>23);
            unset($a[6]); //unset destroi o vetor
            print_r($a);
                 echo  "<br/>";
    //Range = Começa em 5 e vai até 20 pulando de 2 em 2
   $c = range(5,20,2);
   print_r($c);
   echo "<br/>";
   echo "<h3>Var_dump </h3>";
   var_dump($c); //Var_dump mostra o array e o seu tipo
//Array
    echo "<br/>";
     $n = array(13,09,2003);
     $n[] = 16;
     array_unshift($n, 23); //Unshift exclui o primeiro indice do vetor
     array_shift($n);   //shift exclui o primeiro inidice do vetor
     array_push($n, 4);
     array_pop($n); //Exclui o ultimo elemento
     print_r($n);
     echo "<h3>Sort </h3> <br/>";
     sort($n); //sort ordena os elementos 
     echo "<h3>Sort </h3> <br/>";
     echo "O vetor tem " .count($n). " elementos <br/>";
     print_r($n);
     echo"<br/>";
     echo "<h3>Rsort </h3> <br/>";
     rsort($n); //Ordena em forma reversa
     print_r($n);
     echo"<br/>";
     echo "<h3>Asort </h3> <br/>";
     asort($n);
     print_r($n); //asort ordena de forma associativa, ou seja, de forma crescente mas também muda os indices confome a ordem.
     echo "<h3>Arsort </h3> <br/>";
     arsort($n);
     print_r($n);//asrort ordena de forma associativa porem de forma decredcente
     echo"<br/>";
     //Matriz
      echo "<h3>Matriz - PHP</h3>";   
      $m = array ( array(16,10),
                 array(13,09),
                    array(17,10));  
                    print_r($m);                                                                     
    ?>
</pre>
</div>
</body>
</html>