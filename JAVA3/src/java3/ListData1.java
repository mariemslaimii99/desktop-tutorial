/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java3;

import entité.Commentaire;
import entité.Experience;
import java.sql.SQLException;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import service.CommentaireService;



/**
 *
 * @author Administrateur
 */
public class ListData1 {
    private ObservableList<Commentaire> persons=FXCollections.observableArrayList();
private String a;
    public ListData1(String a) throws SQLException  {
        CommentaireService pdao=CommentaireService.getInstance();
        
        persons= pdao.displayAll(a);
        System.out.println(persons);
    }
    public ListData1() throws SQLException  {
        CommentaireService pdao=CommentaireService.getInstance();
        
        persons=  pdao.displayAll();
        System.out.println(persons);
    }
    
    public ObservableList<Commentaire> getPersons(){
        return persons;
    }
    
}
