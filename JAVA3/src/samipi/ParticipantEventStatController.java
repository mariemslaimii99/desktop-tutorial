/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package samipi;

import entité.Event;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import utils.MyDb;

/**
 * FXML Controller class
 *
 * @author user
 */
public class ParticipantEventStatController implements Initializable {

    @FXML
    private Label label;
    @FXML
    private Label DateL;
    @FXML
    private TextField CapacitéLabel;
    
    ObservableList<Event> eventList = FXCollections.observableArrayList();
    List<Integer> participantsList = new ArrayList<Integer>();
    @FXML
    private BarChart<?, ?> chart;
    @FXML
    private Button bouttontest;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        countevent();
        
                 XYChart.Series setl = new XYChart.Series<>();
         for (int i = 0; i < eventList.size(); i++){
             setl.getData().add(new XYChart.Data(eventList.get(i).getNom_event(),participantsList.get(i)));
         }
        
            
        NumberAxis yAxis = new NumberAxis(0, 100, 10);
         
            chart.getData().addAll(setl);
        
        
        
    }
    
    
    private void countevent() {
        try {
            Connection cnx = MyDb.getInstance().getConnection();
            String query = "SELECT * FROM event";
            Statement st;
            ResultSet rs;
            st = cnx.createStatement();
            rs = st.executeQuery(query);
            Event event;
            while (rs.next()) {
                event = new Event(rs.getInt("id"),rs.getString("nom_event"),rs.getString("type"), rs.getInt("nb_place_max"), rs.getString("lieu_depart"), rs.getString("date"),rs.getInt("capacité"));
                eventList.add(event);
            }
            

        } catch (Exception ex) {
            ex.printStackTrace();
            System.out.println("Error on Building Data");
        }
        
        for (Event e : eventList){
            int nbrparticipants = e.getCapacité()-e.getNbplacemax();
            participantsList.add(nbrparticipants);
        }
        
        
    }

    @FXML
    private void bouttontest (ActionEvent event) throws Exception {
        Stage stage;
        Parent root;
       
       
            stage = (Stage) bouttontest.getScene().getWindow();
            root = FXMLLoader.load(getClass().getResource("FXMLDocument.fxml"));
        
        Scene scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }
    
    
    
}
