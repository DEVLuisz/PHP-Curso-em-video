<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While.Html</title>

    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

    <div>
        <form method="get" action="While.php">
            <?php
            $c=1;
            While($c <=5){
           echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
           $c ++;
            }
            ?>
            <input type="submit" value="Enviar">
    </div>
</body>

</html>