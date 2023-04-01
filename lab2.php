<?php

    class Animales{
    public $nombre;
    public $subespecie;
    public $familia;

    public function __construct($nombre, $subespecie, $familia){

        $this->nombre = $nombre;
        $this->subespecie = $subespecie;
        $this->familia = $familia;

    }
    }

class aves extends Animales{

      public $clase;

      public function __construct($nombre, $subespecie, $familia, $clase){

        parent::__construct($nombre, $subespecie, $familia);
        $this->clase = $clase;

      }

      public function informacion(){

        return "El ave $this->nombre sabe $this->clase";
      }
      }

      $ave1 = new aves('pato', 'A. p. domesticus Linnaeus', 'Anatinae', 'Nadar');
      $ave2 = new aves('condor', 'Vultur gryphus Linnaeus', 'Cathartidae', 'volar');
      $ave3 = new aves('gallina', 'Gallus gallus', 'Gallus gallus domesticus', 'Nadar');
      $ave4 = new aves('pinguino', 'pingüino Eudyptes chrysocome', 'Eudyptes chrysocome chrysocome', 'Nadar');
     

     
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
</head>
<body>
    <h1>Laboratorio 2</h1>

    <h3><?php echo $ave1->informacion()?></h3>
    <h3><?php echo $ave2->informacion()?></h3>
    <h3><?php echo $ave3->informacion()?></h3>
    <h3><?php echo $ave4->informacion()?></h3>
    
         
</body>
</html>