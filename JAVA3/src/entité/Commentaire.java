/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;

import java.util.Objects;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;

/**
 *
 * @author Administrateur
 */
public class Commentaire {
    
    private SimpleIntegerProperty id; 
    private SimpleStringProperty Contenu;
    private SimpleIntegerProperty id_client;
    private SimpleIntegerProperty id_experience;
    
    @Override
    public int hashCode() {
        int hash = 7;
        hash = 19 * hash + Objects.hashCode(this.id);
        return hash;
    }
public Commentaire()
{
}
    public Commentaire(String Contenu, int id_client, int id_experience) {
        this.Contenu = new SimpleStringProperty(Contenu);
        this.id_client =new SimpleIntegerProperty(id_client);
        this.id_experience =new SimpleIntegerProperty(id_experience);
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Commentaire other = (Commentaire) obj;
        if (!Objects.equals(this.id, other.id)) {
            return false;
        }
        return true;
    }

    public int getId() {
        return id.get();
    }

    public int getIdexperience() {
        return id_experience.get();
    }

    public void setId_experience(SimpleIntegerProperty id_experience) {
        this.id_experience = id_experience;
    }

    public void setId(int id) {
       this.id = new SimpleIntegerProperty(id);
    }

    public String getContenu() {
        return Contenu.get();
    }
public SimpleStringProperty getContenuProperty(){
        return Contenu;
    }
public SimpleIntegerProperty getIdProperty(){
        return id;
    }
    public SimpleIntegerProperty getidclientProperty(){
        return id_client;
    }
    public void setContenu(String Titre) {
        this.Contenu =  new SimpleStringProperty(Titre);
    }

    public int getClient_id() {
        return id_client.get();
    }

    public void setid_client(Integer id_client) {
        this.id_client = new SimpleIntegerProperty(id_client);
    }
}
