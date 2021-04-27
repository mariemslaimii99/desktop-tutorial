/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;

/**
 *
 * @author Administrateur
 */
public class like {
    private int id ;
    private int idclient;
    private int idexperience;

    public like(int idclient, int idexperience) {
        this.idclient = idclient;
        this.idexperience = idexperience;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdclient() {
        return idclient;
    }

    public void setIdclient(int idclient) {
        this.idclient = idclient;
    }

    public int getIdexperience() {
        return idexperience;
    }

    public void setIdexperience(int idexperience) {
        this.idexperience = idexperience;
    }
    
}
