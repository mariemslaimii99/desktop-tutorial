/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Experience;
import java.awt.Label;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import service.ExperienceService;

/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class FXMLController implements Initializable {
@FXML
private javafx.scene.control.Label theLabel;
  @FXML
    private TextField titre;

    @FXML
    private TextField description;

    @FXML
    private TextField note;

    @FXML
    private TextField endroit;  
    @FXML
    private Button btn;
    @FXML
    private AnchorPane rootPane;
    @FXML
    private Button display;
/** 
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    
    public void initialize(URL url, ResourceBundle rb) {
       
    }    

    @FXML
    private void u(ActionEvent event) {
        theLabel.setText("hello world");
    }

    void update(String text) {
        btn.setOnAction(event -> {
            
          Experience   p = new Experience(titre.getText(), description.getText(),Integer.parseInt(note.getText()),2,endroit.getText());
            ExperienceService pdao = ExperienceService.getInstance();
            pdao.update(p,text);
        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Publication modifiée avec succés!");
        alert.show();
        titre.setText("");
        description.setText("");
        note.setText("");
        endroit.setText("");
            try {
            FXMLLoader loader=new FXMLLoader(getClass().getResource("Display 1.fxml"));
            Parent root = (Parent) loader.load();

            

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        } 
    
        
        
        }); // TODO
    }
    void display(){
     display.setOnAction(event ->
           {
            try {
                AnchorPane pane=FXMLLoader.load(getClass().getResource("Display 1.fxml"));
                rootPane.getChildren().setAll(pane);
                
            } catch (IOException ex) {
                Logger.getLogger(FXMLController.class.getName()).log(Level.SEVERE, null, ex);
            }
           }
           ) ;}
    
}
 