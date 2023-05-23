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
    
    $pais = array
    (
    "espana" => array
    (
    "nombre" => "España",
    "lengua" => "Castellano",
    "moneda" => "Peseta"
    )
    );
    
    echo "La moneda de España es: ". $pais["espana"]["moneda"]
    ?>
</body>
</html>