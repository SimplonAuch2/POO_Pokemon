<?php

  class Pokemon
  {
    public $nom;
    public $type;
    public $pv;
    public $faiblesse;
    public $attaque1;
    public $attaque2;

    public function __construct($nom, $type, $pv, $energie, $faiblesse, $attaque1, $attaque2)
    {
      $this->nom = $nom;
      $this->type = $type;
      $this->pv = $pv;
      $this->energie = $energie;
      $this->faiblesse = $faiblesse;
      $this->attaque1 = $attaque1;
      $this->attaque2 = $attaque2;
    }

    public function getParams(){
      $params = array(
        "nom"=> $this->nom,
        "type"=> $this->type,
        "pv" => $this->pv,
        "energie" => $this->energie,
        "faiblesse" => $this->faiblesse,
        "attaque1" => $this->attaque1,
        "attaque2" => $this->attaque2
      );

      return $params;
    }



    /*
      Le pokemon attaque celui donné en paramètres :
        - param $p : le pokemon attaqué
        - param $num_attaque : un nmobre entier qui peux valoir
            1 = $this->attaque1
            2 = $this->attaque2
        - return : une chaine de caractères qui explique ce qui s'est produit
    */

    public function attaquer( Pokemon $p, int $num_attaque )
    {
      /*
        L'attaque est-elle valide ?
        (techniquement, le paramètre $num_attaque ne peux valoir que 1 ou 2,
        ce qui correspond à attaque1 et attaque2.)
      */
      if( $num_attaque != 1 && $num_attaque != 2 )
      {
        return "Cette attaque est inconnue !";
      }

      /*
        Vérifier que l'attaque est possible
        (l'énergie de l'attaquant doit être égale ou supérieur à l'énergie
        de l'attaque.)
      */

      if( $num_attaque==1 )
        $e = $this->attaque1;
        else
        $e = $this->attaque2;

      if( $e["energie"] > $this->energie )
      {
        return "L'attaque requière plus d'énergie que " . $this->nom. " n'en a !";
      }

      /*
        attaquer !
        (soustraire la force de l'attaque aux vie du pokemon $p attaqué) 
      */
      $p->pv -= $e["degats"]; 

      return $this->nom . " attaque " .$p->nom . " avec " . $e["nom"]. ". "
          . $p->nom . " a perdu " . $e["degats"] . " points de vie, "
          . "il lui reste maintenant " . $p->pv . " points de vie.";
    }

  }

?>
