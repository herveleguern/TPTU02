<?php
//pour installer PHPUnit : composer require --dev phpunit/phpunit
//pour tester le Panier : php vendor/bin/phpunit PanierTest.php
require './vendor/autoload.php';
require 'Panier.php';
require 'Produit.php';
class PanierTest extends PHPUnit\Framework\TestCase
{
    private $panier; //objet Panier du test

    public function setUp():void
    {
        $this->panier=new Panier('monPanier');
        $this->panier->ajouterProduit(new Produit('bic','bic bleu',1),5);
        $this->panier->ajouterProduit(new Produit('rame80g','rame 500feuilles 80grammes',5),1);
    }

    // A COMPLETER
    
}
