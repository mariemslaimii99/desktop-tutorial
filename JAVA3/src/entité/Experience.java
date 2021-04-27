/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;


import java.time.LocalDateTime;
import java.util.Objects;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;

/**
 *
 * @author Administrateur
 */
public class Experience {
    private SimpleIntegerProperty id; 
    private SimpleStringProperty Titre;
    private SimpleStringProperty Description;
    private SimpleIntegerProperty Note;
    private SimpleIntegerProperty points;
    private SimpleIntegerProperty id_client;
    private LocalDateTime Date;
    private SimpleStringProperty endroit;
    private String image;

    public Experience(String Titre,String  Description, int Note, int id_client, String endroit,String image) {
        this.Titre = new SimpleStringProperty(Titre);
        this.Description = new SimpleStringProperty(Description);
        this.Note =new SimpleIntegerProperty (Note);
        this.id_client = new SimpleIntegerProperty (id_client);
        this.endroit = new SimpleStringProperty(endroit);
        this.image=image;
    }
 public Experience(String Titre,String  Description, int Note, int id_client, String endroit) {
        this.Titre = new SimpleStringProperty(Titre);
        this.Description = new SimpleStringProperty(Description);
        this.Note =new SimpleIntegerProperty (Note);
        this.id_client = new SimpleIntegerProperty (id_client);
        this.endroit = new SimpleStringProperty(endroit);
        
    }
    public Experience() {
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 19 * hash + Objects.hashCode(this.id);
        return hash;
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
        final Experience other = (Experience) obj;
        if (!Objects.equals(this.id, other.id)) {
            return false;
        }
        return true;
    }

    public int getId() {
        return id.get();
    }

    public void setId(int id) {
       this.id = new SimpleIntegerProperty(id);
    }

    public String getTitre() {
        return Titre.get();
    }
public SimpleStringProperty getTitreProperty(){
        return Titre;
    }
    public SimpleStringProperty getDescriptionProperty(){
        return Description;
    }
    public void setTitre(String Titre) {
        this.Titre =  new SimpleStringProperty(Titre);
    }

    public String getDescription() {
        return Description.get();
    }

    public void setDescription(String Description) {
        this.Description = new SimpleStringProperty(Description);
    }

    public int getNote() {
        return Note.get();
    }

    public void setNote(int Note) {
        this.Note = new SimpleIntegerProperty(Note);
    }

    public int getPoints() {
        return points.get();
    }

    public void setPoints(int points) {
        this.points = new SimpleIntegerProperty(points);
    }

    public int getId_client() {
        return id_client.get();
    }

    public void setId_client(SimpleIntegerProperty id_client) {
        this.id_client = id_client;
    }

    public LocalDateTime getDate() {
        return Date;
    }

    public void setDate(LocalDateTime Date) {
        this.Date = Date;
    }

    public String getEndroit() {
        return endroit.get();
    }

    public void setEndroit(SimpleStringProperty endroit) {
        this.endroit = endroit;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    

    @Override
    public String toString() {
        return  "***" + Titre.get() +"***    :"+ Description.get()  ;
    }

    
    
}
