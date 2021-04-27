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
 * @author user
 */
public class Event {
    private int id;
    private String nom_event;
    private String type;
    private int nb_place_max;
    private String lieu_depart;
    private String date;
    private int capacité;

    public int getCapacité() {
        return capacité;
    }

    public void setCapacité(int capacité) {
        this.capacité = capacité;
    }

    public Event(String nom_event, String type, int nb_place_max, String lieu_depart, String date, int capacité) {
        this.nom_event = nom_event;
        this.type = type;
        this.nb_place_max = nb_place_max;
        this.lieu_depart = lieu_depart;
        this.date = date;
        this.capacité = capacité;
    }

    public Event(int id, String nom_event, String type, int nb_place_max, String lieu_depart, String date, int capacité) {
        this.id = id;
        this.nom_event = nom_event;
        this.type = type;
        this.nb_place_max = nb_place_max;
        this.lieu_depart = lieu_depart;
        this.date = date;
        this.capacité = capacité;
    }

    public Event(int id, String nom_event, String type, int nb_place_max,String lieu_depart, String date) {
        this.id =id;
        this.nom_event =nom_event;
        this.type =type;
        this.nb_place_max =nb_place_max;
        this.lieu_depart=lieu_depart;
        this.date=date;

    }

    public Event() {
    }

    public Event(String nom_event, String type, String lieu_depart,int nb_place_max, String date) {
        this.nom_event =nom_event;
        this.type =type;
        this.nb_place_max =nb_place_max;
        this.lieu_depart=lieu_depart;
        this.date=date;
    }
    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }
    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }
    public String getNom_event() {
        return nom_event;
    }

    public void setNom_event(String nom_event) {
        this.nom_event =nom_event;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getNbplacemax() {
        return nb_place_max;
    }

    public void setNbplacemax(int nb_place_max) {
        this.nb_place_max =nb_place_max;
    }
    public String getLieudepart() {
        return lieu_depart;
    }

    public void setLieudepart(String lieu_depart) {
        this.lieu_depart = lieu_depart;
    }
    
    /**
     *
     * @return
     */
        
    @Override
    public int hashCode() {
        int hash = 5;
        hash = 53 * hash + Objects.hashCode(this.id);
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
        final Event other = (Event) obj;
        if (!Objects.equals(this.id, other.id)) {
            return false;
        }
        return true;
    }

    
}
