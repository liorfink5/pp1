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

        Class Empleado{
            private $nombre;
            private $sueldo;

            function __construct($nombre, $sueldo){
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;
            }

            function pagaImpuestos(){
                if($this->sueldo > 3000){
                    echo $this->nombre . ": debe pagar impuestos";
                }else{
                    echo $this->nombre . ": no debe pagar impuestos";
                }

            }
        }

        $empleado1 = new Empleado("Lior", 4000);
        $empleado1->pagaImpuestos();
        
    
    ?>
</body>
</html>