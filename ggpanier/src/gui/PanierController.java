/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import entity.Commande;
import entity.Produit;
import java.awt.Desktop;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.Duration;
import static java.time.zone.ZoneRulesProvider.refresh;
import static java.util.Collections.list;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.mail.Message;
import org.controlsfx.control.Notifications;
import services.CommandeCRUD;
import services.PanierCRUD;
import tools.MyConnection;

/**
 * FXML Controller class
 *
 * 
 */
public class PanierController implements Initializable {

 
    @FXML
    private TableColumn<Commande, Integer> Quantite;
    @FXML
    private TableView<Commande> liste;
    PanierCRUD pcr=new PanierCRUD();
    @FXML
    private TableColumn<Commande, String> Nom;
    @FXML
    private TableColumn<Commande, Float> Prix;
    @FXML
    private TextField qt;
    @FXML
    private Button modifier;
    @FXML
    private Button supprimer;
    int id;
    @FXML
    private TextField textrechercher;
    ObservableList<Commande> dataList;
    @FXML
    private Button PDF;
    @FXML
    private Button valider;
    @FXML
    private Button trie;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            // TODO
            showCommande();
                  
        } catch (SQLException ex) {
            Logger.getLogger(PanierController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    
    public void showCommande() throws SQLException {
        System.out.println("DEBUGG!!!!");
        ObservableList<Commande> list =pcr.getCommande();
        //   System.out.println(pcr.getSujet().toString());
               

        //ObservableList<Product> list = FXCollections.observableList(pcd.getProductList());
        //idcreateurtab.setCellValueFactory(new PropertyValueFactory<Sujet, String>("id_createur"));
        Quantite.setCellValueFactory(new PropertyValueFactory<Commande, Integer>("quantite"));
     //   dateposttab.setCellValueFactory(new PropertyValueFactory<Sujet, Date>("date_heure_creation"));
     Nom.setCellValueFactory(new PropertyValueFactory<Commande, String>("nom_produit"));
      Prix.setCellValueFactory(new PropertyValueFactory<Commande, Float>("prix"));

        liste.setItems(list);
         //ObservableList<Object> list1 =pcr.getProduit1();
      
  search_user();
    }

    @FXML
    private void SetValue(MouseEvent event) {
           Commande selected = liste.getSelectionModel().getSelectedItem();
        if (selected != null) {
         
          //  String idsujettab = String.valueOf(selected.getId_suj());
            
           // tfprixP.setText(Sprix);
            
            qt.setText(String.valueOf(selected.getQuantite()));
            id = selected.getId();
        }
    }

    @FXML
    private void ModifierCommande(ActionEvent event) throws SQLException {
             try {
            String requete = "UPDATE Commande SET quantite=? WHERE id="+id+"";
            PreparedStatement pst
                    = new MyConnection().cn.prepareStatement(requete);
            if (isNumeric (String.valueOf(qt.getText())  )){
                
            
            pst.setString(1, qt.getText());
           
            pst.executeUpdate();
            // Alert 
            Alert 
              a = new Alert(Alert.AlertType.WARNING); 
              a.setTitle(" commmande!");
              a.setHeaderText(null);
              a.setContentText("commande Modifié !!!");
              a.showAndWait();
            
            //*********
            
            System.out.println("quantite modifié!");
            } else {
              Alert 
              a = new Alert(Alert.AlertType.WARNING); 
              a.setTitle(" commmande!");
              a.setHeaderText(null);
              a.setContentText("LEEEEEEEEE !!!");
              a.showAndWait();  
            }
        } catch (SQLException ex) {
            Logger.getLogger(PanierCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
          showCommande();
            search_user();
    }
public static boolean isNumeric(String string) {
		int intValue;
		if (string == null || string.equals("")) {
			System.out.println("String cannot be parsed, it is null or empty.");
			return false;
		}
		try {
			intValue = Integer.parseInt(string);
			return true;
		} catch (NumberFormatException e) {
			System.out.println("Input String cannot be parsed to Integer.");
		}
		return false;
	}
    @FXML
    private void SupprimerCommande(ActionEvent event) throws SQLException {
         try {
            String requete = "DELETE FROM Commande WHERE id="+id+"";
            PreparedStatement pst
                    = new MyConnection().cn.prepareStatement(requete);
            pst.executeUpdate();
            // Alert 
            Alert 
              a = new Alert(Alert.AlertType.WARNING); 
              a.setTitle(" Commande!");
              a.setHeaderText(null);
              a.setContentText("commande supprimé !!!");
              a.showAndWait();
            
            //*********
            
            System.out.println("comande supprimé!");
        } catch (SQLException ex) {
            Logger.getLogger(PanierCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
          showCommande(); 
            search_user();
    }

 void search_user() throws SQLException {          

        //ObservableList<Product> list = FXCollections.observableList(pcd.getProductList());
        //idcreateurtab.setCellValueFactory(new PropertyValueFactory<Sujet, String>("id_createur"));
        Quantite.setCellValueFactory(new PropertyValueFactory<Commande, Integer>("quantite"));
           Nom.setCellValueFactory(new PropertyValueFactory<Commande, String>("nom_produit"));
      Prix.setCellValueFactory(new PropertyValueFactory<Commande, Float>("prix"));
        
        dataList =pcr.getCommande();
        liste.setItems(dataList);
        FilteredList<Commande> filteredData = new FilteredList<>(dataList, b -> true);  
 textrechercher.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(message -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
   if (String.valueOf(message.getPrix()).toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
     return true; // Filter matches username
    } 
    else if (String.valueOf(message.getNom_produit()).toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
     return true; // Filter matches username
    } 
   
        
    
                                
         else  
          return false; // Does not match.
   });
  });  
  SortedList<Commande> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(liste.comparatorProperty());  
  liste.setItems(sortedData);
    }

   

 

    @FXML
    private void ExportPDF(ActionEvent event) throws DocumentException {
         try {
            String file_name = ("PANIER.pdf");
            Document document = new Document();
            
            PdfWriter.getInstance(document, new FileOutputStream(file_name));
            
            document.open();
            
            document.addTitle("Votre panier ");
            Paragraph paraHeader2= new Paragraph("                                                                   ".concat("Votre Panier"));
             document.add(paraHeader2);
             Paragraph paraHeader3= new Paragraph("             "
                     + ""
                     + ""
             );
               document.add(paraHeader3);
                 Paragraph paraHeader1 = new Paragraph((("nom".concat(" ")).concat("prix".concat("  ")).concat("quantite".concat(" "))));
            document.add(paraHeader1);
           //         ObservableList<Message> list =pcr.getMessage();
                  // while(list)

            
                 // ObservableList<Message> ProductList = FXCollections.observableArrayList();
        String requete = "SELECT C.id,C.produit_id,C.quantite,P.nom,P.prix,C.panier_id FROM Commande C,Produit P WHERE P.id=C.produit_id";
        try {
            PreparedStatement pst
                    = new MyConnection().cn.prepareStatement(requete);
            //Statement st;
            ResultSet rs;
            try {
                //System.out.println("AHAYYYAA!!!!");
                //st=conn.createStatement();
                //System.out.println("AHAYYYAA222!!!!");
                rs = pst.executeQuery(requete);
                
                Message p;

                while (rs.next()) {
                   // Message msg = new Message(rs.getInt("id_msg"),rs.getString("message"), rs.getString("id_posteur"),rs.getDate("date_heure_post"));
                   // ProductList.add(msg);
                                    String Quantite =  rs.getString("quantite");

                        Paragraph paraHeader11 = new Paragraph(((rs.getString("nom").concat("                    ")).concat(rs.getString("prix"))).concat("            ".concat(rs.getString("quantite"))));
            document.add(paraHeader11);
                }

            } catch (SQLException ex) {
                //System.out.println("AHAYYYAA L7KEEEYAAAAA!!!!");
                ex.printStackTrace();
            }
        } catch (SQLException ex) {
            Logger.getLogger(PanierCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
                  
    
            
            
            document.close();
            Desktop.getDesktop().open(new File(file_name));
        } catch (IOException ex) {
            Logger.getLogger(AddCommandeController.class.getName()).log(Level.SEVERE, null, ex);
        } 
    }

    @FXML
    private void notification(ActionEvent event) throws Exception {
             MailUtil.sendMail("ouhibi.azer@esprit.tn");
        Notifications notification=Notifications.create();
        notification.text("Merci pour votre confiance");
        notification.title("Votre commande est validée "
                + "un email de confirmation vous sera envoyer");
        notification.show();
    }

    @FXML
    private void trier(ActionEvent event) {
                    CommandeCRUD commande = new CommandeCRUD();
        refresh();
        ObservableList<Commande> l = (ObservableList<Commande>) new CommandeCRUD ().getAllTrier();
        


        Quantite.setCellValueFactory(new PropertyValueFactory<Commande,Integer>("Quantite"));
       
liste.setItems(l);
    }
    }





