/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entity.Commande;
import entity.Produit;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import services.CommandeCRUD;

/**
 * FXML Controller class
 *
 * 
 */
public class AddCommandeController implements Initializable {

    @FXML
    private TextField Nom;
    @FXML
    private TextField prix;
    @FXML
    private TextField quantite;
    @FXML
    private Button valider;
    @FXML
    private TextField id;
    private int panier_id  ;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         panier_id = 1;
    }    
public void showId (int ID,String NOM,Float PRIX)
    {
        id.setText(Integer.toString(ID));

Nom.setText(NOM);
prix.setText(Float.toString(PRIX)); 
    }

    @FXML
    private void AjouterCommande(ActionEvent event) throws IOException {
        try
        {
        //save Msg in DATA BASE
       String rid = id.getText();
              String rquantite = quantite.getText();
              System.out.println(id.getText());
              System.out.println(Integer.parseInt(rid));
                            System.out.println(panier_id);

        Commande comm= new Commande(Integer.parseInt(rid),Integer.parseInt(rquantite));
        comm.setPanier_id(panier_id);
        CommandeCRUD co= new CommandeCRUD();
       co.addCommande(comm);
        // Alert 
            Alert 
              a = new Alert(Alert.AlertType.WARNING); 
              a.setTitle(" Commande!");
              a.setHeaderText(null);
              a.setContentText("commande ajouté !!!");
              a.showAndWait();
            
            //*********
            
        
        }  catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
             //showSujet();
                            FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("Panier.fxml"));
  Parent root1 = (Parent) fxmlLoader.load();
PanierController scene2Controller = fxmlLoader.getController();
Stage stage = new Stage();
stage.setScene(new Scene(root1));  
stage.show();          


    }
}
