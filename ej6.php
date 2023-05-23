<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor1 =  $_GET["num1"]; 
        $valor2 =  $_GET["num2"];

        if($valor1 > $valor2){
            echo "El primer numero es mayor que el segundo";
        }else if($valor2 > $valor1){
            echo "El segundo numero es mayor que el primero";
        }else{
            echo "Los numeros son iguales";
        }
    ?>
</body>
</html>