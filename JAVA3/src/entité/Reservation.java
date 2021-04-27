/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;

/**
 *
 * @author user
 */
public class Reservation {
    private int id;
    private int idevent;
    private int idclient;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Reservation(int idevent, int idclient) {
        this.idevent = idevent;
        this.idclient = idclient;
    }

    public int getIdevent() {
        return idevent;
    }

    public void setIdevent(int idevent) {
        this.idevent = idevent;
    }

    public int getIdclient() {
        return idclient;
    }

    public void setIdclient(int idclient) {
        this.idclient = idclient;
    }

    public Reservation(int id, int idevent, int idclient) {
        this.id = id;
        this.idevent = idevent;
        this.idclient = idclient;
    }

    public Reservation() {
    }

}
