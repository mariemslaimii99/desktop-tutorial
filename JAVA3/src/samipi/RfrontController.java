/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package samipi;

import entité.Event;
import entité.Reservation;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.Scanner;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import service.EventService;
import utils.MyDb;

/**
 * FXML Controller class
 *
 * @author user
 */
public class RfrontController implements Initializable {

     @FXML
    private TableView<Event> eventTable;

    @FXML
    private TableColumn<Event, String> NomColonne;

    @FXML
    private TableColumn<Event, String> TypeColonne;

    @FXML
    private TableColumn<Event,String > NbColonne;

    @FXML
    private TableColumn<Event, String> LieuColonne;
        @FXML
    private TableColumn<Event, String> DateColonnne;
    @FXML
    private AnchorPane bouttonreser;
    @FXML
    private TextField annuler;
    @FXML
    private Button an;
    @FXML
    private Button bouttontest;
 

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        show();
                eventTable.getSelectionModel().selectedItemProperty().addListener(new ChangeListener() {
            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                if (eventTable.getSelectionModel().getSelectedItem() != null) {
                    entité.Event e = (entité.Event) eventTable.getSelectionModel().getSelectedItem();
                    System.out.println();
                    annuler.setText(String.valueOf(e.getId()));

                }
            }
        });
    }    

   public void show (){
   List<Integer> event = new ArrayList<>();
   
     ObservableList<Event> eventList = FXCollections.observableArrayList();
     EventService aaa=EventService.getInstance();
     event=aaa.client();
   for(int i=0;i<event.size();i++){
   Event Event= new Event(); 
   Event=aaa.displayById(event.get(i));
   eventList.add(Event);
   }
   NomColonne.setCellValueFactory(new PropertyValueFactory<>("nom_event"));
            TypeColonne.setCellValueFactory(new PropertyValueFactory<>("type"));
            NbColonne.setCellValueFactory(new PropertyValueFactory<>("Nbplacemax"));
            LieuColonne.setCellValueFactory(new PropertyValueFactory<>("Lieudepart"));
            DateColonnne.setCellValueFactory(new PropertyValueFactory<>("date"));
            eventTable.setItems(eventList);
   }

    @FXML
 private void annulerreservation (ActionEvent event) throws SQLException, Exception {
        EventService aa = new EventService();
        
        Scanner sc = new Scanner(System.in);
        Connection cnx = MyDb.getInstance().getConnection();
        Statement st;
        ResultSet rs;
        st = cnx.createStatement();
        Statement stm = cnx.createStatement();
        
        
         Reservation t = new Reservation();
         String SQL = "SELECT * FROM reservation WHERE idevent = "+annuler.getText()+" AND idclient=1"; ///
         rs = stm.executeQuery(SQL);
           
            String req ="DELETE FROM reservation WHERE idevent = ? AND idclient = 1";  // remplacer par ? when user
            try {

               PreparedStatement stm1 = cnx.prepareStatement(req);
                stm1.setInt(1, Integer.parseInt(annuler.getText()));
                int i=stm1.executeUpdate();
              //  stm1.setInt(2, 1); // passage statique de id = 1 du user

                Alert alert = new Alert(AlertType.INFORMATION);
                alert.setTitle("Information Dialog");
                alert.setHeaderText(null);
                alert.setContentText("Reservation annulée avec succes");
                alert.showAndWait();
                stm1.executeUpdate();
                String check = "SELECT nb_place_max FROM event WHERE id = "+annuler.getText()+"";
                PreparedStatement checkstm1 = cnx.prepareStatement(check);
                ResultSet checkcapacite = checkstm1.executeQuery(check);
                if (checkcapacite.next()) {
                int capacite = checkcapacite.getInt("nb_place_max");
                String query = "UPDATE event SET nb_place_max = " + (capacite + 1) + " WHERE id = "+annuler.getText()+"";
                PreparedStatement update = cnx.prepareStatement(query);
                int j = update.executeUpdate();
                }

                System.out.println("Reservation annulée");
            }

                     
         catch (SQLException ex) {
            System.out.println("probleme");
            System.out.println(ex.getMessage());
        } 
            
         show();
    }   
   
       @FXML
    private void bouttontest (ActionEvent event) throws Exception {
        Stage stage;
        Parent root;
       
       
            stage = (Stage) bouttontest.getScene().getWindow();
            root = FXMLLoader.load(getClass().getResource("front.fxml"));
        
        Scene scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }
    
}
