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
    
        Class Tabla extends Celda{
            private $celdas;

            function __construct(){
                $celdas = array();
            }

            function addCelda($celda){
                
                $this->celdas[] = $celda;
                
            }

            function mostrarCeldas(){
                echo "<table border=1>";
                for($i = 0; $i<10; $i++){
                  echo "<tr>";
                    echo "<td> Celda número: " . $this->celdas[$i]->getNumero();
                    echo "</td>";
                    echo "<td>" . $this->celdas[$i]->getTexto();
                    echo "</td>";
                  echo "</tr>";
                }
                echo "</table>";

            }
        }
        
        Class Celda{
            private $numero;
            private $texto;

            function __construct($numero, $texto){
                $this->numero = $numero;
                $this->texto = $texto;
            }

            function getNumero(){
                return $this->numero;
            }

            function getTexto(){
                return $this->texto;
            }
        }

        $tabla = new Tabla();
        $celda0 = new Celda(0, "Texto celda 0");
        $celda1 = new Celda(1, "Texto celda 1");
        $celda2 = new Celda(2, "Texto celda 2");
        $celda3 = new Celda(3, "Texto celda 3");
        $celda4 = new Celda(4, "Texto celda 4");
        $celda5 = new Celda(5, "Texto celda 5");
        $celda6 = new Celda(6, "Texto celda 6");
        $celda7 = new Celda(7, "Texto celda 7");
        $celda8 = new Celda(8, "Texto celda 8");
        $celda9 = new Celda(9, "Texto celda 9");

        $tabla->addCelda($celda0);
        $tabla->addCelda($celda1);
        $tabla->addCelda($celda2);
        $tabla->addCelda($celda3);
        $tabla->addCelda($celda4);
        $tabla->addCelda($celda5);
        $tabla->addCelda($celda6);
        $tabla->addCelda($celda7);
        $tabla->addCelda($celda8);
        $tabla->addCelda($celda9);

        $tabla->mostrarCeldas();
    ?>

</body>
</html>