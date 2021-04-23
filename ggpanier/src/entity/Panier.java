/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

/**
 *
 * 
 */
public class Panier {
    private int id;
    private int quantite;
  
    public Panier (int id) {
        this.id = id;
    }

    public Panier() {
    }

    @Override
    public String toString() {
        return "Panier{" + "id=" + id + ", quantite=" + quantite + '}';
    }
    
}
