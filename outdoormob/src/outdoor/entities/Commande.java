/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.entities;

/**
 *
 * @author ASMA
 */
public class Commande {
  private int id;
 
    private int quantite;

    public Commande(int quantite) {
        this.quantite = quantite;
    }

    public int getId() {
        return id;
    }

    @Override
    public String toString() {
        return "Commande{" + "id=" + id + ", quantite=" + quantite + '}';
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public Commande() {
    }
   
  
}
