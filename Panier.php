<?php
class Panier
{
    private $ref;
    private $lesProduits; //Collection de Produit

    function __construct($ref)
    {
        $this->ref = $ref;
        $this->lesProduits = array(); //panier initialement vide
    }

    public function ajouterProduit($unProduit, $quantite)
    {
        $this->lesProduits[$unProduit->getRef()] = array('qte'=>$quantite, 'prix'=>$unProduit->getPrix());
    }

    public function totalSansPromotion()
    {
        //A COMPLETER
    }

    public function promotion()
    //pour un produit acheté, le second (de même référence) est moitié prix
    {
        //A COMPLETER
    }

    public function totalAvecPromotion()
    {
        //A COMPLETER
    }
}
