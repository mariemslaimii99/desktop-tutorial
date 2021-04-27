package java3;

import entité.Commentaire;
import entité.Experience;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import service.CommentaireService;
import service.ExperienceService;

public class BackcomController {

    @FXML
    private TableView<Commentaire> personsTable;

    @FXML
    private TableColumn<Commentaire,Integer> id;

    @FXML
    private TableColumn<Commentaire, String> contenu;

    @FXML
    private Button btnDelete;

    @FXML
    private TextField text;

    @FXML
    private Label theLabel;

    @FXML
    private Button display;
   @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException, IOException {        
        
        if(event.getSource() == btnDelete){
           
            deleteButton();
       
            
    
    }else if(event.getSource() == display){
           
          

         show();
            
    
    }}
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
   
    public void initialize(URL url, ResourceBundle rb) throws SQLException {
        // TODO
        
     ListData1 listdata = new ListData1();
        
       personsTable.setItems(listdata.getPersons());
       
        contenu.setCellValueFactory(cell -> cell.
                getValue().getContenuProperty());
        
    
    
        //Redirection vers l'interface PieChart
       
    }
    public void show() throws SQLException
    {
        
       ListData1 listdata = new ListData1();
        
       personsTable.setItems(listdata.getPersons());
       
        contenu.setCellValueFactory(cell -> cell.
                getValue().getContenuProperty());
        
       
    }
 
    
    
private void deleteButton() throws SQLException{
   CommentaireService ps=new CommentaireService();
    Commentaire p1 = personsTable.getSelectionModel().getSelectedItem();
   ps.delete(p1.getId());
   show();
   

}
}