/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.Services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import outdoor.entities.Commande;
import outdoor.entities.produit;
import outdoor.utils.statics;

/**
 *
 * @author maryem
 */
public class serviceproduit {
    public static serviceproduit instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    private produit produit;
      public ArrayList<produit> produits;
         public serviceproduit() {
         req = new ConnectionRequest();
    }

    public static serviceproduit getInstance() {
        if (instance == null) {
            instance = new serviceproduit();
        }
        return instance;
    }
    public ArrayList<produit> parseproduits(String jsonText){
       try {
           produits = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> offresListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)offresListJson.get("root");
            System.out.println(list);
        
           for(Map<String,Object> obj : list){
             
               produit s = new produit();
               float id = Float.parseFloat(obj.get("id").toString());
                s.setId((int)id);
                
             
                s.setNomP((obj.get("nomP").toString()));
                s.setDescription((obj.get("description").toString()));
                s.setPrix(obj.get("prix").toString());
                s.setImage((obj.get("image").toString()));
           
                
         
              
                produits.add(s);
           }
            
           } catch (IOException ex) {
            ex.printStackTrace();
            
        }
       
        return produits;
   }
    
    public ArrayList<produit> getAllproduits(){
        produits = new ArrayList<>();
        String url = statics.BASE_URL+"/affichage";
        req.setUrl(url);
        req.setPost(false);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                
                    produits = parseproduits(new String(req.getResponseData()));
            req.removeResponseListener(this);
           //     System.out.println(offres);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
    
    public ArrayList<produit> rechProduits(String s){
        produits = new ArrayList<>();
        String url = statics.BASE_URL+"/recherche?search="+s;
        req.setUrl(url);
        req.setPost(false);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                
                    produits = parseproduits(new String(req.getResponseData()));
            req.removeResponseListener(this);
           //     System.out.println(offres);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
     public boolean addCommande(Commande t,int id) {
            String url = statics.BASE_URL + "/addmob?id="+id+"&Quantite="+t.getQuantite();
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}

