/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Experience;
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
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.Arrays;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import service.ExperienceService;
/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class DisplayController implements Initializable {
    @FXML
    private TableView<Experience> personsTable;
    @FXML
    private TableColumn<Experience, String> TitreColonne;
    @FXML
    private TableColumn<Experience, String> DescriptionColonne;
    @FXML
    private Button btnDelete;
    @FXML
    private TextField text;
 @FXML
    private Button display;
 
    @FXML
    private BarChart<String,Integer> stat;
    @FXML
    private Label theLabel;
    @FXML
    private Button partitre;
    @FXML
    private Button pardescription;
    
    @FXML
    private void handleButtonAction(ActionEvent event) {        
        
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
     @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
      show();
    barchar();
    
        //Redirection vers l'interface PieChart
       
    }
    public void show()
    {
        
       ListData listdata = new ListData();
        
       personsTable.setItems(listdata.getPersons());
        TitreColonne.setCellValueFactory(cell -> cell.
                getValue().getTitreProperty());
        DescriptionColonne.setCellValueFactory(cell -> cell.
                getValue().getDescriptionProperty());
        
       
    }
 
    
    
private void deleteButton(){
   ExperienceService ps=new ExperienceService();
    Experience p1 = personsTable.getSelectionModel().getSelectedItem();
   ps.delete(p1.getId());
   show();
   

}
public void barchar()
    {    ExperienceService ps=new ExperienceService();
        stat.getData().clear();
       List<String> Endroit = Arrays.asList();
       List<Integer> note = Arrays.asList();
       note=ps.getNote();
       Endroit=ps.getEndroit();
       XYChart.Series<String,Integer> series = new XYChart.Series<>();
        
 for (int i = 0; i < Endroit.size(); i++){
series.getData().add(new XYChart.Data<>(Endroit.get(i),note.get(i) ));
 }

stat.getData().add(series);


    }

    @FXML
    private void partitre(ActionEvent event) {
          ObservableList<Experience> persons=FXCollections.observableArrayList();
         ExperienceService ps=ExperienceService.getInstance();
        persons=ps.partitre();
    personsTable.setItems(persons);
        TitreColonne.setCellValueFactory(cell -> cell.
                getValue().getTitreProperty());
        DescriptionColonne.setCellValueFactory(cell -> cell.
                getValue().getDescriptionProperty());
    }

    @FXML
    private void pardescription(ActionEvent event) {
           ObservableList<Experience> persons=FXCollections.observableArrayList();
         ExperienceService ps=ExperienceService.getInstance();
        persons=ps.pardescription();
    personsTable.setItems(persons);
        TitreColonne.setCellValueFactory(cell -> cell.
                getValue().getTitreProperty());
        DescriptionColonne.setCellValueFactory(cell -> cell.
                getValue().getDescriptionProperty());
    }


    }

    


