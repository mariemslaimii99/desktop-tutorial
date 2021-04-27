/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entité.Event;
import entité.Reservation;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.MyDb;

/**
 *
 * @author user
 */
public class EventService implements IEvent<Event>{  
    Connection cnx ;
    private static EventService instance;
    private Statement st;
    private ResultSet rs;
    
    public EventService() {
        MyDb cs=MyDb.getInstance();
        try {
            st=cs.getConnection().createStatement();
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static EventService getInstance(){
        if(instance==null) 
            instance=new EventService();
        return instance;
    }

    @Override
    public void insert(Event o) {
        String req="insert into event (nom_event,type,nb_place_max,lieu_depart,date,capacité) values ('"+o.getNom_event()+"','"+o.getType()+"','"+o.getNbplacemax()+"','"+o.getLieudepart()+"','"+o.getDate()+"','"+o.getCapacité()+"')";
        try {
            st.executeUpdate(req);
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }    }

    public void delete(int id) {
        String req="delete from event where id="+id;
       
              try {
             st.executeUpdate(req);
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }    }

    @Override
    public ObservableList<Event> displayAll() {
        String req="select * from event";
       ObservableList<Event> list=FXCollections.observableArrayList();       

        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Event e=new Event();
                e.setId(rs.getInt("id"));
                e.setNom_event(rs.getString("nom_event"));
                e.setType(rs.getString("type"));
                e.setNbplacemax(rs.getInt("nb_place_max"));
                e.setLieudepart(rs.getString("lieu_depart"));
                e.setDate(rs.getString("date"));
                e.setCapacité(rs.getInt("capacité"));


                list.add(e);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }

    @Override
    public Event displayById(int id) {
String req="select * from event WHERE id='"+id+"';";
                Event e=new Event();
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                e.setId(rs.getInt("id"));
                e.setNom_event(rs.getString("nom_event"));
                e.setType(rs.getString("type"));
                e.setNbplacemax(rs.getInt("nb_place_max"));
                e.setLieudepart(rs.getString("lieu_depart"));
                e.setDate(rs.getString("date"));
                e.setNbplacemax(rs.getInt("capacité"));

            }
            
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return e;    }

    @Override
    public boolean update(Event p) {
             String req="UPDATE `event` SET `nom_event` = '"+p.getNom_event()+"', `type` = '"+p.getType()+"', `nb_place_max` = '"+p.getNbplacemax()+"', `lieu_depart` = '"+p.getLieudepart()+"', `date` = '"+p.getDate()+"', `capacité` = '"+p.getCapacité()+"' WHERE `event`.`id` = '"+p.getId() +"';";
              System.out.println( p.getId());
        try {
            st.executeUpdate(req) ;
                
              Event  aaa=displayById(p.getId());
                System.out.println( aaa.getNom_event());
                return true;
            } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
            
        
        return false;
     }

    @Override
    public void delete(Event o) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
   public ObservableList<Event> recherche(String a)
  { System.out.println(a);
   String req="select * from event WHERE nom_event LIKE '%"+a+"%' or type LIKE '%"+a+"%' or lieu_depart LIKE '%"+a+"%';";
        ObservableList<Event> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Event p=new Event();
                p.setId(rs.getInt("id"));
                p.setNom_event(rs.getString("nom_event"));
                p.setType(rs.getString("type"));
                p.setNbplacemax(rs.getInt("nb_place_max"));
                p.setLieudepart(rs.getString("lieu_depart"));
                p.setDate(rs.getString("date"));
                p.setNbplacemax(rs.getInt("capacité"));

                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
   
  }
    
    /*
     public void reserver(int a){
            String req="insert into reservation (idevent,idclient) values ('"+a+"','"+1+"')";
        try {
            st.executeUpdate(req);
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }*/
    
    
    public List<Integer> client (){
      List<Integer> list = new ArrayList<>();

      String req="select idevent from reservation WHERE idclient=1";
             try {
            rs=st.executeQuery(req);
            while(rs.next()){
                list.add(rs.getInt("idevent"));
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(EventService.class.getName()).log(Level.SEVERE, null, ex);
        }
    return list;
    }
   
}

    
