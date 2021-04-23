/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entity.Commande;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import tools.MyConnection;

/**
 *
 * 
 */
public class CommandeCRUD {
     public void addCommande (Commande comm) throws SQLException{
    try{
        String requete = "INSERT INTO Commande (produit_id,quantite,panier_id)"
                + "VALUES(?,?,?)" ;
           PreparedStatement pst =
            new MyConnection().cn.prepareStatement(requete);
     
    pst.setString(1,String.valueOf(comm.getProduit_id()));
      pst.setString(2,String.valueOf(comm.getQuantite()));
            pst.setInt(3,comm.getPanier_id());


    pst.executeUpdate();
    System.out.println("Sujet ajoutée!");




    }
    catch (SQLException ex) {
            Logger.getLogger(CommandeCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

  
   public ObservableList<Commande> getAllTrier() {
     
  
        ObservableList<Commande> CommandeList = FXCollections.observableArrayList();
        String req = "SELECT C.id,C.produit_id,C.quantite,P.nom,P.prix,C.panier_id FROM Commande C,Produit P WHERE P.id=C.produit_id order by C.quantite DESC";
        try {
PreparedStatement st =
            new MyConnection().cn.prepareStatement(req);    
ResultSet rst = st.executeQuery(req);
            
            while (rst.next()){
                Commande s= new Commande();
                
                  s.setId(rst.getInt("id"));
                   s.setProduit_id(rst.getInt("Produit_id"));
                                 s.setNom_produit(rst.getString("nom"));
                   s.setPrix(rst.getFloat("prix"));

                 s.setQuantite(rst.getInt("quantite"));
               
              
            
                
               
               CommandeList.add(s);
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(CommandeCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
        return CommandeList;
     }
}
