/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Experience;
import java.io.IOException;
import static java.lang.Math.round;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import org.controlsfx.control.Rating;
import service.ExperienceService;

/**
 * FXML Controller class
 *
 * @author Administrateur
 */
public class SinglepubController implements Initializable {

    @FXML
    private ImageView image;
    @FXML
    private Label titre;
    @FXML
    private Label description;
    @FXML
    private Button commentaire;
    @FXML
    private Rating rating;
    @FXML
    private Button rate;
    @FXML
    private Button like;
    @FXML
    private Button dislike;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    

    private Experience produit;
   
    public void setData(Experience produit) {
        this.produit= produit;
        ExperienceService pda = ExperienceService.getInstance();
        titre.setText(produit.getTitre());
        Image im =new Image("file:///C:\\wamp64\\www\\Projet\\public\\uploads\\images\\Captureddd.PNG");
        image.setImage(im);
        description.setText(produit.getDescription());
         Experience p1= new Experience();
        p1=pda.displayById(produit.getId());
        rating.setRating(p1.getNote());
         if((pda.testrate(produit.getId()))) 
     
                rate.setVisible(false);
        else rate.setVisible(true);
        rate.setOnAction(event -> {rate(produit);
        
        });
        commentaire.setOnAction(event ->{try {
            gotocommentaire(produit);
            } catch (SQLException ex) {
                Logger.getLogger(SinglepubController.class.getName()).log(Level.SEVERE, null, ex);
            }
});
      like.setOnAction(event ->{liking(produit);});
       dislike.setOnAction(event ->{disliking(produit);});
        if((pda.testlike(p1.getId()))) 
          {
                like.setVisible(false);
          dislike.setVisible(true);
          }else {like.setVisible(true);
          dislike.setVisible(false);
          }
              
//System.out.println(movie.getImgUrl());
        
    
}

    @FXML
    private void click(MouseEvent event) {
    }

    private void gotocommentaire(Experience exp) throws SQLException {
        try {  
            FXMLLoader loader=new FXMLLoader(getClass().getResource("Commentairedisplay.fxml"));
            Parent root = (Parent) loader.load();

            CommentairedisplayController secController=loader.getController();
            secController.show1(exp.getTitre());

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        } 
    
    }

    private void rate(Experience exp) {
      ExperienceService pda = ExperienceService.getInstance();
        Experience p1= new Experience();
        p1=pda.displayById(exp.getId());
         System.out.print(p1.getNote());
        p1.setNote((int) round((p1.getNote()+rating.getRating())/2));
       
       pda.rate(p1);
          if((pda.testrate(p1.getId()))) 
     
                rate.setVisible(false);
        else rate.setVisible(true);
         rating.setRating(p1.getNote());
        
    }

    @FXML
    private void liking(Experience exp) {
      ExperienceService pda = ExperienceService.getInstance();
        Experience p1=new Experience();
        p1=pda.displayById(exp.getId());
         
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
    private void disliking(Experience exp) {
         ExperienceService pda = ExperienceService.getInstance();
        Experience p1=new Experience();
        p1=pda.displayById(exp.getId());
         
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