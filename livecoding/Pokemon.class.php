<?php

  class Pokemon
  {
    public $nom;
    public $type;
    public $pv;
    public $faiblesse;
    public $attaque1;
    public $attaque2;

    public function __construct($nom, $type, $pv, $faiblesse, $attaque1, $attaque2)
    {
      $this->nom = $nom;
      $this->type = $type;
      $this->pv = $pv;
      $this->faiblesse = $faiblesse;
      $this->attaque1 = $attaque1;
      $this->attaque2 = $attaque2;
    }

    public function getParams(){
      $params = array(
        "nom"=> $this->nom,
        "type"=> $this->type,
        "pv" => $this->pv,
        "faiblesse" => $this->faiblesse,
        "attaque1" => $this->attaque1,
        "attaque2" => $this->attaque2
      );

      return $params;
    }

  }

?>
