/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package samipi;


//import utils.Excel;
import entité.Event;
import utils.MyDb;
import java.awt.event.MouseEvent;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.collections.FXCollections;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.Initializable;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.stage.Stage;
import jxl.write.WriteException;
import service.EventService;
import utils.Excel;
//import utils.MyDb;


/**
 *
 * @author user
 */

public class FXMLDocumentController implements Initializable {

    @FXML
    private Button button;

    @FXML
    private Label label;

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
    private TextField NomLabel;

    @FXML
    private TextField LieuLabel;
    @FXML
    private TextField NbLabel;
    @FXML
    private DatePicker DateLabel;
    @FXML
    private TextField NomLabel1;
    @FXML
    private ComboBox<String> ComboType;
    @FXML
    private Label DateL;
    ObservableList<Event> dataList;
    @FXML
    private TextField recheche;
    

     private  ObservableList<Event> exp=FXCollections.observableArrayList();
    ObservableList<Event> eventList = FXCollections.observableArrayList();
    @FXML
    private TableColumn<Event, String> CapacitéColonnne;
    @FXML
    private TextField CapacitéLabel;
    @FXML
    private Button button1;
    @FXML
    private Button button11;
    @FXML
    private Button bouttontest;
    @FXML
    private Button bexcel;
    


    @FXML
    private void handleButtonAction(ActionEvent event) {
        System.out.println("You clicked me!");
        label.setText("Hello World!");
    }
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
                event = new Event(rs.getInt("id"),rs.getString("nom_event"),rs.getString("type"), rs.getInt("nb_place_max"), rs.getString("lieu_depart"), rs.getString("date"),rs.getInt("capacité"));
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
            CapacitéColonnne.setCellValueFactory(new PropertyValueFactory<>("capacité"));


        eventTable.setItems(eventList);;
    }
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ObservableList<String> Type = FXCollections.observableArrayList("Randonnée","Camping");
        ComboType.setPromptText("Choisir type");
        ComboType.setItems(Type);

        show();
        button.setOnAction((ActionEvent event) -> {
            
          Event   p = new Event(NomLabel.getText(), ComboType.getValue(),Integer.parseInt(NbLabel.getText()),LieuLabel.getText(),DateLabel.getValue().toString(),Integer.parseInt(NbLabel.getText()));
            EventService pdao = EventService.getInstance();
            pdao.insert(p);
        
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Publication insérée avec succés!");
        alert.show();
        NomLabel.setText("");
        ComboType.setItems(Type);
        NbLabel.setText("");
        LieuLabel.setText("");
        DateL.setText(DateLabel.getValue().toString());
        CapacitéLabel.setText("");

        show();
        });
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
            CapacitéColonnne.setCellValueFactory(new PropertyValueFactory<>("capacité"));

            eventTable.setItems(List);
            
       
    }
    @FXML
       private void modifier_event(ActionEvent event) throws SQLException
    {
    EventService sp= new EventService();
      Event   p = new Event(Integer.parseInt(NomLabel1.getText()),NomLabel.getText(), ComboType.getValue(),Integer.parseInt(NbLabel.getText()),LieuLabel.getText(),DateLabel.getValue().toString(),Integer.parseInt(CapacitéLabel.getText()));      
     sp.update(p);
       refresh();    
     System.out.println("le");
      refresh();    }

    @FXML
    private void supprimer(ActionEvent event) {
            EventService sp= new EventService();
      sp.delete(Integer.parseInt(NomLabel1.getText()));
      show();
    }

    @FXML
    private void fillevent(javafx.scene.input.MouseEvent event) {
                Event p= eventTable.getSelectionModel().getSelectedItem();
        NomLabel.setText(p.getNom_event());
        //ComboType.setItems(String.(p.getType()));
        NbLabel.setText(String.valueOf(p.getNbplacemax()));
        LieuLabel.setText(p.getLieudepart());
         CapacitéLabel.setText(String.valueOf(p.getCapacité()));
        //DateL.setText(DateLabel.getValue().toString());
       NomLabel1.setText(String.valueOf(p.getId()));
    }

    @FXML
    private void recherche(KeyEvent event) {
    exp.removeAll();
    EventService pda = EventService.getInstance();
    exp=pda.recherche(recheche.getText());
    eventTable.setItems(exp);

    }

    @FXML
    private void bouttontest (ActionEvent event) throws Exception {
        Stage stage;
        Parent root;
       
       
            stage = (Stage) bouttontest.getScene().getWindow();
            root = FXMLLoader.load(getClass().getResource("PartcipantEventStat.fxml"));
        
        Scene scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }

    @FXML
    private void excel(ActionEvent event) throws SQLException, WriteException, IOException {
        Excel ex=new Excel();
            ex.Excel();
    }
   




}
