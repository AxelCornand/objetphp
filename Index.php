<?php

class pokemon {
    protected $nom;
    protected $type;
    protected $lvl;

    public function __construct($nom,$type,$lvl)
    {
        $this->nom=$nom;
        $this->type=$type;
        $this->lvl=$lvl;
    }
    public function presentation()
    {
        var_dump("Bonjour,je suis $this->nom niveau $this->lvl et de type $this->type");
    }
}
class dresseur extends pokemon{
    protected $prenom;
    protected $age;

    public function __construct($nom, $type, $lvl,$prenom,$age)
    {
        parent::__construct($nom, $type, $lvl);
        $this->age=$age;
        $this->prenom=$prenom;
    }
    public function presentation()
    {
        var_dump("Salut, je suis $this->prenom $this->nom , j'ai $this->age et j'ai capturé");
    }
}
$pokemon1=new pokemon("pikachu","electrique","50");
$pokemon2=new pokemon("Salameche","feu","50");
$pokemon3=new pokemon("carapuce","eau","50");
$pokemon4=new pokemon("bulbizarre","plante","50");

$dresseur1=new dresseur("Cornand","humain","dieu","Axel","32");

$dresseur1->presentation();
$pokemon1->presentation();
$pokemon2->presentation();
$pokemon3->presentation();
$pokemon4->presentation();