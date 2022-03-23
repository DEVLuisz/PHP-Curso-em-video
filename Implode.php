<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funções de Strings - PHP</title>
</head>
<body>
<div>
    
    <?php
    //Strlen mostra a quantidade de caracteres contando com os espaços
    //Trim tira os espaços desnecessarios
    echo"<h1>StrLen e Trim</h1>";
    $nome4 = "   Luís de Cristo   ";
    echo(strlen($nome4));
    $novo = trim($nome4);
    echo "<br/>";
    echo(strlen($novo));
    echo "<br/>";
    //Mostra quantas vezes a palavra mencionada foi encontrada no array
    echo"<h1>SubStrCount</h1>";
    $frase3 = "Estou aprendendo PHP no curso em video de PHP";
    $cont3 = substr_count($frase3, "PHP");
    print("PHP encontrado $cont3 vezes");
    echo"<br/>";
    //substr mostra a palavra exigida em (mix,max)
    echo"<h1>SubStr</h1>";
    $site = "curso em video";
    $sub = substr($site, 0, 5);
    echo "$sub";
    echo"<br/>";
    //StrWordCount conta e mostra quantas palavras existem no array
    echo"<h1>StrWordCount</h1>";
$frase2 = "PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.";
$cont = str_word_count($frase2,0);
print($cont);
echo"<br/>";
    //Deixa todas as letras em maisculas
    echo"<h1>StrToUpper</h1>";
    $nome3 = "Luís Felipe";
    print("Seu nome é ". strtoupper($nome3));
    echo"<br/>";
    //Strtolower deixa todas as letras minusculas
    echo"<h1>StrToLower</h1>";
    $nom = "Luís Felipe";
    print("Seu nome é ". strtolower($nom));
    echo"<br/>";
    //strsplit mostra cada posição da letra 
    echo"<h1>StrSplit</h1>";
    $thiemi = "Thiemi";
    $vetor2 = str_split($thiemi);
    print_r($vetor2);
    echo"<br/>";
    //StrRev mostra como fica o array ao reverso, ou seja, ao contrario
     echo"<h1>StrRev</h1>";
$nome = "Luís Felipe";
$nome2 = "Thiemi de Lara";
print(strrev($nome));
print(strrev($nome2));
echo"<br/>";
    //StrReplace faz troca da palavra ou qualquer que seja
    echo"<h1>StrReplace</h1>";
    $frase = "Gosto muito da Isabelly! Isabelly é muito linda!";
    $novaFrase = str_ireplace("Isabelly" , "Thiemi" , $frase);
    echo "$novaFrase";
    echo"<br/>";
    //Str_repeat repete um caractere quantas vezes o usuario colocar
echo"<h1>Strrepeat</h1>";
$txt = str_repeat("PHP", 5);
  print("O Texto gerado foi $txt");
  print(str_repeat("-",20));
  echo"<br/>";
    //Strpos ou Stripos mostra o valor do vetor do array, cada letra e espaço é um numero
    echo"<h1>Strpos</h1>";
$frases = "Estou aprendendo PHP";
$pos = stripos($frases, "php");
echo  "$frases <br/> A string foi encontrada na posição  $pos";
echo"<br/>";
    //print_r mostra cada posição do array no vetor, utilizando no desenvolvimento
    echo"<h1>Printr</h1>";
$v[0]=5;
$v[1]=13;
$v[2]=09;

print_r($v);
echo"<br/>";
$v2= array(3,7,8,9,13,9);
print_r($v2);
echo"<br/>";
    //printf, reserva os valores das variaveis indicados pelo %, sendo assim pode formatar em moeda etc.
    echo"<h1>Printf</h1>";
  $p = "Leite";
  $pr = 4.5;
  printf("O %s custa  R$ %.2f" , $p, $pr);
  echo"<br/>";

    //Implode coloca um caractere nos espaços do array selecionado
    echo"<h1>Implode</h1>";
   $vetor[0]="Thiemi";
   $vetor[1]="de";
   $vetor[2]="Lara";
   $texto= implode("#", $vetor);
   print($texto);
    ?>

</div>
</body>
</html>