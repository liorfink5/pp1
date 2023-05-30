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
    
        class Persona{
            private $nombre;
            private $edad;

            function setNombre($nombre){
                $this->nombre = $nombre;
            }

            function setEdad($edad){
                $this->edad = $edad;
            }

            function getNombre(){
                return $this->nombre;
            }

            function getEdad(){
                return $this->edad;
            }

            function imprimirDatos(){
                echo "Nombre: ". $this->getNombre(); 
                echo "<br></br>";
                echo "Edad: ". $this->getEdad();
                echo "<br></br>";
            }
        }

        class Empleado extends Persona{
            private $sueldo;

            function setSueldo($sueldo){
                $this->sueldo = $sueldo;
            }

            function getSueldo(){
                return $this->sueldo;
            }

            function imprimirDatos(){
               // parent::imprimirDatos();
                echo "Sueldo: ". $this->getSueldo();
            }
        }

        $persona1 = new Persona();
            $persona1->setNombre("Lior");
            $persona1->setEdad(20);

        $empleado1 = new Empleado();
            $empleado1->setSueldo(4000);

        $persona1->imprimirDatos();
        $empleado1->imprimirDatos();
    ?>
</body>
</html>