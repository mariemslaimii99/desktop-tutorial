/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import services.PanierCRUD;
import tools.MyConnection;

/**
 *
 * 
 */
public class Commande {
    private int id;
    private int produit_id;
    private int quantite;
    private int panier_id;
  private String nom_produit;
  private float prix;

    public Commande(int id, int produit_id, int quantite, int panier_id, String nom_produit, float prix) {
        this.id = id;
        this.produit_id = produit_id;
        this.quantite = quantite;
        this.panier_id = panier_id;
        this.nom_produit = nom_produit;
        this.prix = prix;
    }

    public String getNom_produit() {
        return nom_produit;
    }

    public void setNom_produit(String nom_produit) {
        this.nom_produit = nom_produit;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }
  
    public Commande(int quantite) {
        this.quantite = quantite;
    }

    public Commande(int produit_id, int quantite) {
        this.produit_id = produit_id;
        this.quantite = quantite;
    }

    public Commande(int id, int produit_id, int quantite) {
        this.id = id;
        this.produit_id = produit_id;
        this.quantite = quantite;
    }

    public Commande() {
    }

    public Commande(int id, int produit_id, int quantite, int panier_id) {
        this.id = id;
        this.produit_id = produit_id;
        this.quantite = quantite;
        this.panier_id = panier_id;
    }

    public int getId() {
        return id;
    }

    public int getProduit_id() {
        return produit_id;
    }

    public int getQuantite() {
        return quantite;
    }

    public int getPanier_id() {
        return panier_id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setProduit_id(int produit_id) {
        this.produit_id = produit_id;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public void setPanier_id(int panier_id) {
        this.panier_id = panier_id;
    }

   
    
}

