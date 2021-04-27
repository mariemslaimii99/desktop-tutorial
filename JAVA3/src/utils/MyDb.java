/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gogo-
 */
public class MyDb {

    private static MyDb instance;
    private Connection cnx;
    String url = "jdbc:mysql://127.0.0.1/outdoor";

    public MyDb() {
        System.out.println("Instantiation de CNX");
        try {
            cnx = DriverManager.getConnection(url, "root", "");
            System.out.println("Connexion établie");
        } catch (SQLException ex) {
            System.err.println("Connexion impossible");
            System.err.println(ex);
        }
    }

    public static MyDb getInstance() {
        if (instance == null) {
            instance = new MyDb();
        }
        return instance;
    }
    
    public Connection getConnection(){
        return cnx;
    }

}