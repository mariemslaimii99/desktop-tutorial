/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.entities;

/**
 *
 * @author maryem
 */
public class produit 
{
    private int id;
    String nomP, prix, description, image;

    public produit() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNomP() {
        return nomP;
    }

    public void setNomP(String nomP) {
        this.nomP = nomP;
    }

    public String getPrix() {
        return prix;
    }

    public void setPrix(String prix) {
        this.prix = prix;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public produit(String nomP, String prix, String description, String image) {
        this.nomP = nomP;
        this.prix = prix;
        this.description = description;
        this.image = image;
    }

    public produit(int id, String nomP, String prix, String description, String image) {
        this.id = id;
        this.nomP = nomP;
        this.prix = prix;
        this.description = description;
        this.image = image;
    }
    
    
}
