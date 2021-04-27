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
import javafx.stage.Stage;
import service.EventService;
import utils.MyDb;

/**
 * FXML Controller class
 *
 * @author user
 */
public class FrontController implements Initializable {

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
    private Button reserver;
    @FXML
    private Button bouttontest;
        @FXML

    private TextField idevent;
    ObservableList<Event> eventList = FXCollections.observableArrayList();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        show();
        eventTable.getSelectionModel().selectedItemProperty().addListener(new ChangeListener() {
            @Override
            public void changed(ObservableValue observable, Object oldValue, Object newValue) {
                if (eventTable.getSelectionModel().getSelectedItem() != null) {
                    entité.Event e = (entité.Event) eventTable.getSelectionModel().getSelectedItem();
                    System.out.println();
                    idevent.setText(String.valueOf(e.getId()));

                }
            }
        });
    }    

    @FXML
    private void fillevent(MouseEvent event) {
    }
           
    public void show()
    {
       System.out.print("test");
         EventService sp= new EventService();

            ObservableList<Event> List = sp.displayAll();
            NomColonne.setCellValueFactory(new PropertyValueFactory<>("nom_event"));
            TypeColonne.setCellValueFactory(new PropertyValueFactory<>("type"));
            NbColonne.setCellValueFactory(new PropertyValueFactory<>("Nbplacemax"));
            LieuColonne.setCellValueFactory(new PropertyValueFactory<>("Lieudepart"));
            DateColonnne.setCellValueFactory(new PropertyValueFactory<>("date"));
            eventTable.setItems(List);
            
       
    }
     @FXML
    public void refresh() {
        eventList.removeAll(eventList);
        try {
            Connection cnx = MyDb.getInstance().getConnection();
            String query = "SELECT * FROM event";
            Statement st;
            ResultSet rs;
            st = cnx.createStatement();
            rs = st.executeQuery(query);
            Event event;
            while (rs.next()) {
                event = new Event(rs.getInt("id"),rs.getString("nom_event"),rs.getString("type"), rs.getInt("nb_place_max"), rs.getString("lieu_depart"), rs.getString("date"));
                eventList.add(event);
            }

        } catch (Exception ex) {
            ex.printStackTrace();
            System.out.println("Error on Building Data");
        }
            NomColonne.setCellValueFactory(new PropertyValueFactory<>("nom_event"));
            TypeColonne.setCellValueFactory(new PropertyValueFactory<>("type"));
            NbColonne.setCellValueFactory(new PropertyValueFactory<>("Nbplacemax"));
            LieuColonne.setCellValueFactory(new PropertyValueFactory<>("Lieudepart"));
            DateColonnne.setCellValueFactory(new PropertyValueFactory<>("date"));

        eventTable.setItems(eventList);;
    }

   /* @FXML
    private void reserver(ActionEvent event) {
        Event p1 = eventTable.getSelectionModel().getSelectedItem();

try {
            URL fxmlURL = getClass().getResource("Rfront.fxml");  
            FXMLLoader fxmlLoader = new FXMLLoader(fxmlURL);  
            Parent root = (Parent) fxmlLoader.load();
            RfrontController secController = fxmlLoader.getController();
            secController.reserver(p1.getId());

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
        
        
    }*/

    @FXML
    private void reserver(ActionEvent event) throws SQLException, Exception {
        EventService aa = new EventService();

        Scanner sc = new Scanner(System.in);
        Connection cnx = MyDb.getInstance().getConnection();
        Statement st;
        ResultSet rs;
        st = cnx.createStatement();
        Statement stm = cnx.createStatement();

        Reservation t = new Reservation();
        String SQL = "SELECT * FROM reservation WHERE idevent = " + idevent.getText() + " AND idclient=1"; ///
        rs = stm.executeQuery(SQL);
        String check = "SELECT nb_place_max FROM event WHERE id = " + idevent.getText() + "";
        PreparedStatement checkstm1 = cnx.prepareStatement(check);
        ResultSet checkcapacite = checkstm1.executeQuery(check);
        if (checkcapacite.next()) {
            int capacite = checkcapacite.getInt("nb_place_max");

            if (capacite > 0) {

              

                if (!rs.next()) {
                      String query = "UPDATE event SET nb_place_max = " + (capacite - 1) + " WHERE id = " + idevent.getText() + "";
                PreparedStatement update = cnx.prepareStatement(query);
                int i = update.executeUpdate();
                    String req = "INSERT INTO reservation (idevent,idclient) values (?,?)";
                    try {

                        PreparedStatement stm1 = cnx.prepareStatement(req);
                        stm1.setInt(1, Integer.parseInt(idevent.getText()));
                        stm1.setInt(2, 1); // passage statique de id = 1 du user

                        Alert alert = new Alert(AlertType.INFORMATION);
                        alert.setTitle("Information Dialog");
                        alert.setHeaderText(null);
                        alert.setContentText("Reservation effectuée avec succes.");
                        alert.showAndWait();
                        stm1.executeUpdate();
                        refresh();
                        
                       
                        

                        System.out.println("Reservation ajouté");
                    } catch (SQLException ex) {
                        System.out.println("probleme");
                        System.out.println(ex.getMessage());
                    }
                } else {
                    Alert alert = new Alert(AlertType.WARNING);
                    alert.setTitle("Information Dialog");
                    alert.setHeaderText(null);
                    alert.setContentText("Vous avez deja reserver à cet evenement");
                    alert.showAndWait();
                }

            } else {
                Alert alert = new Alert(AlertType.ERROR);
                alert.setTitle("Information Dialog");
                alert.setHeaderText(null);
                alert.setContentText("l'evenement est deja au complet");
                alert.showAndWait();
                
            }
            refresh();
            
        }
    }
   
    @FXML
    private void Bouttontest (ActionEvent event) throws Exception {
        Stage stage;
        Parent root;
       
       
            stage = (Stage) bouttontest.getScene().getWindow();
            root = FXMLLoader.load(getClass().getResource("Rfront.fxml"));
        
        Scene scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }
    
    
}
