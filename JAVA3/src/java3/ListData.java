/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;


import entité.Experience;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXMLLoader;
import javafx.scene.layout.AnchorPane;
import service.ExperienceService;



/**
 *
 * @author wiemhjiri
 */
public class ListData {
    
     /**
     * The data as an observable list of Persons.
     */
    
    private ObservableList<Experience> persons=FXCollections.observableArrayList();

    public ListData() {
        
        ExperienceService pdao=ExperienceService.getInstance();
        persons= pdao.displayAll();
        System.out.println(persons);
    }
    
    public ObservableList<Experience> getPersons(){
        return persons;
    }
   
}