<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php
      
  /* $cores = ["vernelho", "azul"];
      echo $cores[1];*/
          
/*$pessoa = ["nome" => "Ana", "idade" => 23];
  echo $pessoa["idade"]; */
      
     /* $numeros = [1, 2, 3];
      array_push($numeros, 4);
      echo $numeros[3];*/
      
  /*$frutas = array("maçã", "laranja", "morango");
      
      foreach($frutas as $fruta) {
        echo "A fruta é $fruta<br>";
      }*/
      
      $comidas = array("maçã", "batata", "frango");
      foreach($comidas as $comida) {
        echo " $comida<br>";
           }
       array_push($comidas, "sopa de cebola");
       foreach($comidas as $comida) {
        echo " $comida<br>";
           }
      array_pop($comidas);
      foreach($comidas as $comida) {
        echo " $comida<br>";
           }
      
      
      
      
        ?>

    </body>
</html>

