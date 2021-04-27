/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import entité.Experience;
import entité.Commentaire;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.Datasource;


import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author Administrateur
 */
public class CommentaireService implements Idao<Commentaire>{
    
    private static CommentaireService instance;
    private Statement st;
    private ResultSet rs;
    
    public CommentaireService() {
        Datasource cs=Datasource.getInstance();
        try {
            st=cs.getCnx().createStatement();
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static CommentaireService getInstance(){
        if(instance==null) 
            instance=new CommentaireService();
        return instance;
    }
    
    public ObservableList<Commentaire> displayAll(String titre) throws SQLException {
        String req="select * from Experience where titre='"+titre+"'";
       
        rs=st.executeQuery(req);
        while(rs.next()){
        Experience e=new Experience();
                e.setId(rs.getInt(1));
                e.setTitre(rs.getString("titre"));
                e.setDescription(rs.getString(3));
        req="select * from Commentaire where id_experience="+e.getId();        
        }
                
        ObservableList<Commentaire> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Commentaire p=new Commentaire();
                p.setId(rs.getInt(1));
                p.setContenu(rs.getString("Contenu"));
                p.setid_client(rs.getInt(3));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }
   
   public void delete(int id) {
        String req1="delete from Commentaire where id="+id;
        
        Commentaire p=displayById(id);
       
        
              try {
           
            st.executeUpdate(req1);
             
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
     @Override
    public Commentaire displayById(int id) {
           String req="select * from Commentaire where id ="+id;
           Commentaire p=new Commentaire();
        try {
            rs=st.executeQuery(req);
           // while(rs.next()){
            rs.next();
                p.setId(rs.getInt("id"));
                p.setContenu(rs.getString("contenu"));
                p.setid_client(rs.getInt("id_client"));
            //}  
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
    return p;
    }

   

   
    @Override
    public void insert(Commentaire o) {
       
        
   
    String req1="insert into Commentaire (contenu,id_experience,id_client) values ('"+o.getContenu()+"','"+o.getIdexperience()+"','"+o.getClient_id()+"')";
        try {
            st.executeUpdate(req1);
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    

  
    public boolean update(Commentaire p, String a) {
String qry = "select * from commentaire  WHERE contenu='"+a+"';";
Commentaire c=new Commentaire();
        try {
            rs=st.executeQuery(qry);
           // while(rs.next()){
            rs.next();
                c.setId(rs.getInt("id"));
                c.setContenu(rs.getString("contenu"));
                c.setid_client(rs.getInt("id_client"));
            //}  
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }



    qry = "UPDATE commentaire SET contenu = '"+p.getContenu()+"' WHERE id="+c.getId();    
        try {
            if (st.executeUpdate(qry) > 0) {
                return true;
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false;    }

    

    @Override
    public ObservableList<Commentaire> displayAll() {
        String req="select * from Commentaire ";        
        
                
        ObservableList<Commentaire> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Commentaire p=new Commentaire();
                p.setId(rs.getInt(1));
                p.setContenu(rs.getString("Contenu"));
                p.setid_client(rs.getInt(4));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }

    @Override
    public void delete(Commentaire o) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    public int slata(String a)
    {
    String req="select * from Experience where titre ='"+a+"'";
           Experience p=new Experience();
        try {
            rs=st.executeQuery(req);
           // while(rs.next()){
            rs.next();
                p.setId(rs.getInt("id"));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString("description"));
            //}  
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
    return p.getId();
    
    }
    public boolean test(){
        String req ="select * from commentaire where contenu LIKE '%fdp%' ";
         Commentaire p=new Commentaire();
        try {
            rs=st.executeQuery(req);
            if (!rs.next() ) {return true;}
           // while(rs.next()){
            else{
                p.setId(rs.getInt("id"));
                p.setContenu(rs.getString("contenu"));
                p.setid_client(rs.getInt("id_client"));
            //}  
            }} catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
         CommentaireService com=new CommentaireService();
        com.delete(p.getId());
        return false;
    }        
public ObservableList<String> Commentaire(String titre) throws SQLException
            
    {
    
            String req="select * from Experience where titre='"+titre+"'";
       
        rs=st.executeQuery(req);
        while(rs.next()){
        Experience e=new Experience();
                e.setId(rs.getInt(1));
                e.setTitre(rs.getString("titre"));
                e.setDescription(rs.getString(3));
        req="select * from Commentaire where id_experience='"+e.getId()+"'";        
        }
                
        ObservableList<String> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Commentaire p=new Commentaire();
                p.setId(rs.getInt(1));
                p.setContenu(rs.getString("Contenu"));
                p.setid_client(rs.getInt(3));
                list.add(p.getContenu());
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }
    @Override
    public boolean update(Commentaire os) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}