/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import com.mysql.cj.jdbc.Blob;
import com.mysql.jdbc.Connection;

import entité.Experience;

import utils.Datasource;


import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.chart.XYChart;

/**
 *
 * @author Administrateur
 */
public class ExperienceService implements Idao<Experience>{
    
    private static ExperienceService instance;
    private Statement st;
    private ResultSet rs;
    
    public ExperienceService() {
        Datasource cs=Datasource.getInstance();
        try {
            st=cs.getCnx().createStatement();
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static ExperienceService getInstance(){
        if(instance==null) 
            instance=new ExperienceService();
        return instance;
    }
    @Override
    public ObservableList<Experience> displayAll() {
        String req="select * from Experience";
        ObservableList<Experience> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Experience p=new Experience();
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                p.setImage(rs.getString("image"));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }
    public void delete(int id) {
        String req1="delete from Commentaire where id_experience="+id;
        String req="delete from Experience where id="+id;
        Experience p=displayById(id);
       
          if(p!=null)
              try {
           
            st.executeUpdate(req1);
             st.executeUpdate(req);
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }else System.out.println("n'existe pas");
    }
     @Override
    public Experience displayById(int id) {
           String req="select * from Experience where id ="+id;
           Experience p=new Experience();
        try {
            rs=st.executeQuery(req);
           // while(rs.next()){
            rs.next();
                p.setId(rs.getInt("id"));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString("description"));
                p.setPoints(rs.getInt("points"));
                 p.setNote(rs.getInt("note"));
                 p.setImage(rs.getString("image"));
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
    return p;
    }

    @Override
    public void insert(Experience o) {
       String req="insert into Experience (titre,description,note,id_client,endroit,image) values ('"+o.getTitre()+"','"+o.getDescription()+"','"+o.getNote()+"','"+o.getId_client()+"','"+o.getEndroit()+"','"+o.getImage()+"')";
        try {
            st.executeUpdate(req);
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   
    public boolean update(Experience p,String a) {
         String qry = "UPDATE Experience SET titre = '"+p.getTitre()+"', Description = '"+p.getDescription()+"', note = '"+p.getNote()+"', endroit = '"+p.getEndroit()+"' WHERE titre = '"+a+"';";
        
        try {
            if (st.executeUpdate(qry) > 0) {
                return true;
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false;
    
    }

    @Override
    public void delete(Experience o) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    public ObservableList<String> Client(int x)
            
    {
    String req="select * from Experience where id_client="+x;
        ObservableList<String> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Experience p=new Experience();
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                
                list.add(p.getTitre());
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }

    @Override
    public boolean update(Experience os) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    public Experience image (){
     String req="select * from Experience where id="+58;
               
         Experience p=new Experience();
        try {
            rs=st.executeQuery(req);
            rs.next();
               
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                
                
              
            
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return p;
    
    
    
    }
          public boolean rate(Experience p)
          {
          String qry = "UPDATE Experience SET  note = '"+p.getNote()+"' WHERE titre = '"+p.getTitre()+"';";
          String qry1="insert into rating (idexperience,idclient) values ('"+p.getId()+"','"+2+"')";
        try {
            if (st.executeUpdate(qry) > 0) {
                st.executeUpdate(qry1);
                return true;
                
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false;
          
          
          
          }
         
  public ObservableList<Experience> recherche(String a)
  { System.out.println(a);
   String req="select * from Experience WHERE titre LIKE '%"+a+"%';";
        ObservableList<Experience> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Experience p=new Experience();
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
  
  
  }
  public List<String> getEndroit()
  {
  String req="select DISTINCT endroit from Experience order by endroit DESC";
  List<String> Endroit = new ArrayList<>();
  try{
       rs=st.executeQuery(req);
    while(rs.next()){
  
  Endroit.add(rs.getString("endroit"));
  
  }
  
  }catch(SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
  }
  Endroit.forEach(e->System.out.println(e));
  return Endroit;
  }
  
  public List<Integer> getNote(){
  String req="select avg(note) as moy from Experience group by endroit order by endroit DESC ";
   List<Integer> Note = new ArrayList<>();
  try{
       rs=st.executeQuery(req);
    while(rs.next()){
  
  System.out.println(req);
   Note.add(rs.getInt("moy"));
  }
  
  }catch(SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
  }
  Note.forEach(e->System.out.println(e));
  return Note;
  
  }  
  public boolean testrate(int a){
  String req="select * from rating where idclient=2 AND idexperience='"+a+"';";
  try{
       rs=st.executeQuery(req);
    if(rs.next()){
    System.out.println("asba");
  return true;
  
  }else
        return false;
  
  }catch(SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
  }
  return false;}
  
  
  
  public ObservableList<Experience> partitre() {
        String req="select * from Experience order by titre ASC";
        ObservableList<Experience> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Experience p=new Experience();
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                p.setImage(rs.getString("image"));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }
    public ObservableList<Experience> pardescription() {
        String req="select * from Experience order by description ASC";
        ObservableList<Experience> list=FXCollections.observableArrayList();       
        
        try {
            rs=st.executeQuery(req);
            while(rs.next()){
                Experience p=new Experience();
                p.setId(rs.getInt(1));
                p.setTitre(rs.getString("titre"));
                p.setDescription(rs.getString(3));
                p.setImage(rs.getString("image"));
                list.add(p);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }
    public boolean like(Experience p){
    
     String qry = "UPDATE Experience SET  points = '"+(p.getPoints()+1)+"' WHERE id = '"+p.getId()+"';";
          String qry1="insert into liking (idexperience,idclient) values ('"+p.getId()+"','"+2+"')";
        try {
            if (st.executeUpdate(qry) > 0) {
                st.executeUpdate(qry1);
                return true;
                
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false;
    
    }
    public boolean dislike(Experience p){
    
     String qry = "UPDATE Experience SET  points = '"+(p.getPoints()-1)+"' WHERE id = '"+p.getId()+"';";
          String qry1="delete from liking where idclient=2 and idexperience='"+p.getId()+"';" ;
        try {
            if (st.executeUpdate(qry) > 0) {
                st.executeUpdate(qry1);
                return true;
                
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false;
    
    }
    public boolean testlike(int a){
  String req="SELECT * from liking WHERE idclient=2 AND idexperience='"+a+"';";
  try{
       rs=st.executeQuery(req);
    if(rs.next()){
    System.out.println("asba");
  return true;
  
  }else
        return false;
  
  }catch(SQLException ex) {
            Logger.getLogger(ExperienceService.class.getName()).log(Level.SEVERE, null, ex);
  }
  return false;}
          
}
