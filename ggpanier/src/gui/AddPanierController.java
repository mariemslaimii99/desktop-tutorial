/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entity.Panier;
import entity.Produit;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import services.PanierCRUD;

/**
 * FXML Controller class
 *
 * 
 */
public class AddPanierController implements Initializable {

    @FXML
    private TableView<Produit> tab;
    @FXML
    private TableColumn<Produit, Integer> idtab;
    @FXML
    private TableColumn<Produit, String> nomtab;
    @FXML
    private TableColumn<Produit, Float> prixtab;
    PanierCRUD pcr=new PanierCRUD();
    @FXML
    private Button ajouter;
int ID;
String NOM;
Float PRIX;
    @FXML
    private Button AfficherPanier;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
       showProduit();
    }    
     public void showProduit() {
        System.out.println("DEBUGG!!!!");
        ObservableList<Produit> list =pcr.getProduit();
        //   System.out.println(pcr.getSujet().toString());
        //ObservableList<Product> list = FXCollections.observableList(pcd.getProductList());
        idtab.setCellValueFactory(new PropertyValueFactory<Produit, Integer>("id"));
        //idcreateurtab.setCellValueFactory(new PropertyValueFactory<Sujet, String>("id_createur"));
        nomtab.setCellValueFactory(new PropertyValueFactory<Produit, String>("nom"));
     //   dateposttab.setCellValueFactory(new PropertyValueFactory<Sujet, Date>("date_heure_creation"));
        prixtab.setCellValueFactory(new PropertyValueFactory<Produit, Float>("prix"));
   
        
        tab.setItems(list);
 
    }

    @FXML
    private void SetValue(MouseEvent event) {
          Produit selected = tab.getSelectionModel().getSelectedItem();
        if (selected != null) {
            ID = selected.getId();
            NOM = selected.getNom();
            PRIX = selected.getPrix();
            
   }          
            
        
 }

    @FXML
    private void AjouterPanier(ActionEvent event) throws IOException {
           FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("AddCommande.fxml"));
Parent root1 = (Parent) fxmlLoader.load();
AddCommandeController scene2Controller = fxmlLoader.getController();
scene2Controller.showId(ID,NOM, PRIX);
Stage stage = new Stage();
stage.setScene(new Scene(root1));  
stage.show();
}

    @FXML
    private void AfficherPanier(ActionEvent event) throws IOException {
                   FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("Panier.fxml"));
  Parent root1 = (Parent) fxmlLoader.load();
PanierController scene2Controller = fxmlLoader.getController();
Stage stage = new Stage();
stage.setScene(new Scene(root1));  
stage.show();
                   
}}
