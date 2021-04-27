package java3;
import entité.Experience;
import java.io.BufferedInputStream;
import java.io.BufferedOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import static java.lang.Math.round;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;
import javafx.stage.FileChooser;
import javafx.util.Duration;
import javax.swing.ImageIcon;
import org.controlsfx.control.Notifications;
import org.controlsfx.control.Rating;
import service.ExperienceService;
/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class Display1Controller implements Initializable {
 @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;
    @FXML
   private Button commentaire; 
    @FXML
    private Button  btn;
    @FXML
    private TextField titre;

    @FXML
    private TextField description;

    @FXML
    private TextField note;

    @FXML
    private TextField endroit;

    @FXML
    private Button modifer;

    @FXML
    private ChoiceBox<String> choix;

    @FXML
    private ListView<Experience> list;
    
    @FXML
    private ImageView view;
     @FXML
    private Rating rating;

    @FXML
    private Button rate;
@FXML
private Button upload;
    @FXML
    private Label titre1;
    @FXML
    private Label titre2;
    @FXML
    private TextField recherche;
    private  ObservableList<Experience> exp=FXCollections.observableArrayList();
    private  String urlInserted;
    @FXML
    private Button like;
    @FXML
    private AnchorPane asla;
    @FXML
    private Button dislike;
    private List<Experience> produits = new ArrayList<>();
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
     @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         try {
            showProducts();
        } catch (SQLException ex) {
            Logger.getLogger(SlataController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(SlataController.class.getName()).log(Level.SEVERE, null, ex);
        }
         Image img=new Image("/images/icon.png");
        ExperienceService pda = ExperienceService.getInstance();
        choix.setItems(pda.Client(2));
        btn.setOnAction(event -> {
            
          Experience   p = new Experience(titre.getText(), description.getText(),Integer.parseInt(note.getText()),2,endroit.getText(),urlInserted);
            ExperienceService pdao = ExperienceService.getInstance();
            pdao.insert(p);
        Notifications notificationBuilder = Notifications.create()
                .title("publication ajouté")
                .text("Someone added a new publication to the forum")
                .graphic(new ImageView(img))
                .hideAfter(Duration.seconds(5))
                .position(Pos.BOTTOM_RIGHT);
        notificationBuilder.darkStyle();
                notificationBuilder.show();
        
        titre.setText("");
        description.setText("");
        note.setText("");
        endroit.setText("");
             try {
                 showProducts();
             } catch (SQLException ex) {
                 Logger.getLogger(Display1Controller.class.getName()).log(Level.SEVERE, null, ex);
             } catch (IOException ex) {
                 Logger.getLogger(Display1Controller.class.getName()).log(Level.SEVERE, null, ex);
             }
        });
        
        
    
      
    
    
        //Redirection vers l'interface PieChart
       
    }
    public void showProducts() throws SQLException, IOException{
       
          grid.getChildren().clear();
        produits.clear();
        ExperienceService sp = new ExperienceService();

        produits = sp.displayAll();
        int column = 0;
        int row = 2;
        //local produits
        int i = 0;
        try {
            for (i = 0; i < produits.size(); i++) {
                FXMLLoader fxmlLoader = new FXMLLoader();
                fxmlLoader.setLocation(getClass().getResource("/java3/singlepub.fxml"));
                AnchorPane anchorPane = fxmlLoader.load();

                SinglepubController singleproductpontroller = fxmlLoader.getController();
                singleproductpontroller.setData(produits.get(i));

                if (column ==3) {
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
    private void gotoadd(ActionEvent event) throws IOException {
    
        try {
            FXMLLoader loader=new FXMLLoader(getClass().getResource("FXML.fxml"));
            Parent root = (Parent) loader.load();

            FXMLController secController=loader.getController();
            secController.update(choix.getValue());

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        } 
    
    }
 @FXML
    private void gotocommentaire(ActionEvent event) throws IOException, SQLException {
    Experience p1 = list.getSelectionModel().getSelectedItem();
     try {  
            FXMLLoader loader=new FXMLLoader(getClass().getResource("Commentairedisplay.fxml"));
            Parent root = (Parent) loader.load();

            CommentairedisplayController secController=loader.getController();
            secController.show1(p1.getTitre());

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        } 
    
    }
private void show(ActionEvent event)
{
    ExperienceService pda = ExperienceService.getInstance();
        Experience p1 = list.getSelectionModel().getSelectedItem();
        p1=pda.displayById(p1.getId());
        titre1.setText(p1.getTitre());
       titre2.setText(p1.getDescription());
       rating.setRating(p1.getNote());
        System.out.print(p1.getId());
      Image image = new Image("C:\\wamp64\\www\\Projet\\public\\uploads\\images\\"+p1.getImage());
           
      
            view.setImage(image);
        
}
@FXML
private void rate(ActionEvent event) {
 ExperienceService pda = ExperienceService.getInstance();
        Experience p1 = list.getSelectionModel().getSelectedItem();
        p1=pda.displayById(p1.getId());
         System.out.print(p1.getNote());
        p1.setNote((int) round((p1.getNote()+rating.getRating())/2));
       
       pda.rate(p1);
          if((pda.testrate(p1.getId()))) 
     
                rate.setVisible(false);
        else rate.setVisible(true);
         rating.setRating(p1.getNote());
         

}
  @FXML
  void recherche(KeyEvent event)
{    
    exp.removeAll();
    ExperienceService pda = ExperienceService.getInstance();
    exp=pda.recherche(recherche.getText());
    list.setItems(exp);


  
}
@FXML
private void uploadImage(ActionEvent event) throws FileNotFoundException, IOException 
    {
        FileChooser fc = new FileChooser();
        //fc.setInitialDirectory(" ");
        fc.getExtensionFilters().addAll();
        //--for single file
        File selectedFile = fc.showOpenDialog(null);

        if (selectedFile != null) {
            //listView.getItems().add(selectedFile.getAbsolutePath());
            urlInserted = "file:///" + selectedFile.getAbsolutePath();
            String a="";
            for (int i=0;i<urlInserted.length();i++){
                
                
                a=a+urlInserted.charAt(i);
                if (urlInserted.charAt(i) =='\\'){
                    
                     a=a+"\\" ;
                }
            
            
            }
            
            urlInserted=selectedFile.getName();
          
            FileInputStream in = new FileInputStream("C:\\Users\\Administrateur\\Desktop\\"+selectedFile.getName());
  FileOutputStream ou = new FileOutputStream("C:\\wamp64\\www\\Projet\\public\\uploads\\images\\"+selectedFile.getName());
  BufferedInputStream bin = new BufferedInputStream(in);
  BufferedOutputStream bou = new BufferedOutputStream(ou);
  int b=0;
  while(b!=-1){
   b=bin.read();
   bou.write(b);
  }
  bin.close();
  bou.close();
  upload.setText(selectedFile.getName());
 }
            
            

            //imageView1.setText(selectedFile.getName());
            /*
            Image image1 = new Image(selectedFile.toURI().toString());
            imageView1.setImage(image1);
             */
        else {
            System.out.println("Not valid file");
        }
 
}

    @FXML
    private void banana(MouseEvent event) {
        ExperienceService pda = ExperienceService.getInstance();
        Experience p1 = list.getSelectionModel().getSelectedItem();
        p1=pda.displayById(p1.getId());
        titre1.setText(p1.getTitre());
       titre2.setText(p1.getDescription());
       rating.setRating(p1.getNote());
        System.out.print(p1.getId());
         if((pda.testlike(p1.getId()))) 
          {
                like.setVisible(false);
          dislike.setVisible(true);
          }else {like.setVisible(true);
          dislike.setVisible(false);
          }
        if((pda.testrate(p1.getId()))) 
     
                rate.setVisible(false);
        else rate.setVisible(true);
      Image image = new Image("file:///C:\\wamp64\\www\\Projet\\public\\uploads\\images\\"+p1.getImage());
            
            view.setImage(image);
             
    }

    @FXML
    private void liking(ActionEvent event) {
        ExperienceService pda = ExperienceService.getInstance();
        Experience p1 = list.getSelectionModel().getSelectedItem();
        p1=pda.displayById(p1.getId());
         
       pda.like(p1);
       
          if((pda.testlike(p1.getId()))) 
          {
                like.setVisible(false);
          dislike.setVisible(true);
          }else {like.setVisible(true);
          dislike.setVisible(false);
          }
    }
    @FXML
    private void disliking(ActionEvent event) {
        ExperienceService pda = ExperienceService.getInstance();
        Experience p1 = list.getSelectionModel().getSelectedItem();
        p1=pda.displayById(p1.getId());
         
       pda.dislike(p1);
       
          if((pda.testlike(p1.getId()))) 
          {
                like.setVisible(false);
          dislike.setVisible(true);
          }else {like.setVisible(true);
          dislike.setVisible(false);
          }
    }
    
}