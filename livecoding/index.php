<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pokemon</title>
  </head>
  <body>

    <?php
      ini_set('display_errors', 1);
      require_once('Pokemon.class.php');
      $marrisson= new Pokemon (
        "marrisson",
        "plante",
        60,
        "feu",
        array('nom' => "fouet lianes", "energie"=>1, "energieType"=>"plante", "degats"=>10),
        array('nom' => "canon graine", "energie"=>2, "energieType"=>["plante", "normal"], "degats"=>20)
      );
      // echo $marrisson->nom;
      // echo $marrisson->pv;
      print_r($marrisson->getParams());
    ?>

  </body>
</html>
