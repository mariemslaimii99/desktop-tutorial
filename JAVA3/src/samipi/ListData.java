/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package samipi;

import entité.Event;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import service.EventService;

/**
 *
 * @author user
 */
public class ListData {
    
     /**
     * The data as an observable list of Persons.
     */
    
    private ObservableList<Event> Event=FXCollections.observableArrayList();

    public ListData() {
        
        EventService pdao=EventService.getInstance();
        Event= (ObservableList<Event>) pdao.displayAll();
        System.out.println(Event);
    }
    
    public ObservableList<Event> getPersons(){
        return Event;
    }
   
}