/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package java3;

import com.sun.javafx.runtime.VersionInfo;
import java3.DisplayController;
import java3.ListData;
import java.io.IOException;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import service.CommentaireService;
import service.ExperienceService;

import utils.Datasource;
/**
 *
 * @author Administrateur
 */
public class JAVA3 extends Application {

    @Override
    public void start(Stage stage) throws Exception {
       Parent root=FXMLLoader.load(getClass().getResource("Display 1.fxml"));
       Scene scene=new Scene(root);
       stage.setTitle("hello world");
       stage.setScene(scene);
stage.show();


    }
    public static void main(String[] args) throws SQLException
    {
    launch(args);
    Datasource ds1= new Datasource();
    System.out.print("connexion");
    ExperienceService ps=new ExperienceService();
    
    
    
   
   
     
    }
            }