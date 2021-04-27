/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Experience;

import javafx.geometry.Insets;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;
import service.ExperienceService;

/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class SlataController implements Initializable {

    
 

    private List<Experience> produits = new ArrayList<>();

    
    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;
    @FXML
    private ComboBox<?> filter;
    @FXML
    private TextField rech;
    @FXML
    private Button cancel;
  
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
               
               
        try {
            showProducts();
        } catch (SQLException ex) {
            Logger.getLogger(SlataController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(SlataController.class.getName()).log(Level.SEVERE, null, ex);
        }
           
        
    }   
    
    
   public void showProducts() throws SQLException, IOException{
       
          grid.getChildren().clear();
        produits.clear();
        ExperienceService sp = new ExperienceService();

        produits = sp.displayAll();
        int column = 0;
        int row = 1;
        //local produits
        int i = 0;
        try {
            for (i = 0; i < produits.size(); i++) {
                FXMLLoader fxmlLoader = new FXMLLoader();
                fxmlLoader.setLocation(getClass().getResource("/java3/singlepub.fxml"));
                AnchorPane anchorPane = fxmlLoader.load();

                SinglepubController singleproductpontroller = fxmlLoader.getController();
                singleproductpontroller.setData(produits.get(i));

                if (column == 1) {
                    column = 0;
                    row++;
                }

                grid.add(anchorPane, column++, row); //(child,column,row)
                //set grid width
                grid.setMinWidth(Region.USE_COMPUTED_SIZE);
                grid.setPrefWidth(Region.USE_COMPUTED_SIZE);
                grid.setMaxWidth(Region.USE_PREF_SIZE);

                //set grid height
                grid.setMinHeight(Region.USE_COMPUTED_SIZE);
                grid.setPrefHeight(Region.USE_COMPUTED_SIZE);
                grid.setMaxHeight(Region.USE_PREF_SIZE);

                GridPane.setMargin(anchorPane, new Insets(10));
            }

        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void filter(ActionEvent event) {
    }

    @FXML
    private void recherche(KeyEvent event) {
    }

    @FXML
    private void show(ActionEvent event) {
    }
    
}
