/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entity.Commande;
import entity.Panier;
import entity.Produit;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import tools.MyConnection;

/**
 *
 * 
 */
public class PanierCRUD {
       public ObservableList<Produit> getProduit() {

        ObservableList<Produit> ProduitList = FXCollections.observableArrayList();
        String requete = "SELECT id,nom,prix FROM produit ";
        try {
            PreparedStatement pst
                    = new MyConnection().cn.prepareStatement(requete);
            //Statement st;
            ResultSet rs;
            try {
                //System.out.println("AHAYYYAA!!!!");
                //st=conn.createStatement();
                //System.out.println("AHAYYYAA222!!!!");
                rs = pst.executeQuery(requete);
               Produit p;

                while (rs.next()) {
                   Produit pro = new Produit(rs.getInt("id"), rs.getString("nom"), rs.getFloat("prix"));
               //   Sujet suj = new Sujet(rs.getString("id_suj"));
           
                    ProduitList.add(pro);
                }

            } catch (Exception ex) {
                //System.out.println("AHAYYYAA L7KEEEYAAAAA!!!!");
                ex.printStackTrace();
            }
        } catch (SQLException ex) {
            Logger.getLogger(PanierCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }

        return ProduitList;
    }

    public ObservableList<Panier> getPanier() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   


  public ObservableList<Commande> getCommande() throws SQLException {

        ObservableList<Commande> CommandeList = FXCollections.observableArrayList();
        String requete = "SELECT C.id,C.produit_id,C.quantite,P.nom,P.prix,C.panier_id FROM Commande C,Produit P WHERE P.id=C.produit_id ";

            PreparedStatement pst = new MyConnection().cn.prepareStatement(requete);
            ResultSet rs;
        
                rs = pst.executeQuery(requete);

               Commande c;

                while (rs.next()) {
                   Commande com = new Commande(rs.getInt("id"),rs.getInt("produit_id"),rs.getInt("quantite"),rs.getInt("panier_id"),rs.getString("nom"),rs.getFloat("prix"));
               //   Sujet suj = new Sujet(rs.getString("id_suj"));
           
                    CommandeList.add(com);
                }
               


        return CommandeList;
    }    
   
}
