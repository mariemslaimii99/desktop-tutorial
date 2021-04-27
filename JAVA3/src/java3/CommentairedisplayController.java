/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Commentaire;
import entité.Experience;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.stage.Stage;
import service.CommentaireService;
import service.ExperienceService;

/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class CommentairedisplayController implements Initializable {
 
  
    @FXML
    private TableView<Commentaire> personsTable;

    @FXML
    private TableColumn<Commentaire,Integer> UserColonne;

    @FXML
    private TableColumn<Commentaire,String> ContenuColonne;
        @FXML
    private TextArea contenuu;

    @FXML
    private Button ajouter;
    @FXML
    private Label test;
    @FXML
    private ChoiceBox <String> choix;

    @FXML
    private TextArea texte;

    @FXML
    private Button modifier;
    /**
     * Initializes the controller class.
     */
        
    
     @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
      
      
    
    
        //Redirection vers l'interface PieChart
       
    }
    public void show1(String text) throws SQLException
    {
        CommentaireService pda = CommentaireService.getInstance();
        choix.setItems(pda.Commentaire(text));
       ListData1 listdata = new ListData1(text);
        
       personsTable.setItems(listdata.getPersons());
        
        ContenuColonne.setCellValueFactory(cell -> cell.
                getValue().getContenuProperty());
          ajouter.setOnAction(event -> {
            CommentaireService pdao = CommentaireService.getInstance();
          Commentaire   p = new Commentaire(contenuu.getText(), 2,pdao.slata(text));
            
            pdao.insert(p);
           if(pdao.test()==false)
           {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Commentaire non accepté !");
        alert.show();
           }else
           {
           Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Commentaire  accepté !");
        alert.show();
           
           
           }
        contenuu.setText("");
        
           try {
               show1(text);
           } catch (SQLException ex) {
               Logger.getLogger(CommentairedisplayController.class.getName()).log(Level.SEVERE, null, ex);
           }
        });
          modifier.setOnAction(event -> {
            
          CommentaireService pdao = CommentaireService.getInstance();
          Commentaire   p = new Commentaire(texte.getText(), 2,pdao.slata(text));
            pdao.update(p,choix.getValue());
        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Publication modifiée avec succés!");
        alert.show();
        texte.setText("");
    ListData1 listdata2;
            try {
                listdata2 = new ListData1(text);
                personsTable.setItems(listdata2.getPersons());
            } catch (SQLException ex) {
                Logger.getLogger(CommentairedisplayController.class.getName()).log(Level.SEVERE, null, ex);
            }
        
       
        
       
        
        }); // TODO
       
    }
    
    
}
