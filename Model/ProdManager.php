<?php

namespace Model;

use Model\Manager;

class ProdManager extends Manager
{
     // ajoute un nouvel produit a la bdd
    public function newProduct($nomProduit, $fileDestination, $paragraphe, $genre)
    {
        $db = $this->dbConnect();
        $newProd = $db->prepare('INSERT INTO produits SET nom_produit = ?, img_produit = ?, paragraphe = ?, genre = ?');
        $produit = $newProd->execute(array($nomProduit, $fileDestination, $paragraphe, $genre));
        return $produit;
                    
    }

    //Renvoie tous les produits hommes
    public function getAllProdHomme()
    {
        $db = $this->dbConnect();
        $allProdHomme = $db->query('SELECT id, nom_produit, img_produit, paragraphe FROM produits WHERE genre = 1');
        $allProdHomme->execute(array());
        $results = $allProdHomme->fetchAll();
        return $results;
    }

    //Renvoie tous les produits femmes
    public function getAllProdFemme()
    {
        $db = $this->dbConnect();
        $allProdFemme = $db->query('SELECT id, nom_produit, img_produit, paragraphe FROM produits WHERE genre = 2');
        $allProdFemme->execute(array());
        $results = $allProdFemme->fetchAll();
        return $results;
    }

    // Efface un Produit de labdd
    public function deleteProd($prodId)
    {
        $db = $this->dbConnect();
        $deleteProd = $db->prepare('DELETE FROM produits WHERE id = ?');
        $deleteProd->execute(array($prodId));
    }

}

