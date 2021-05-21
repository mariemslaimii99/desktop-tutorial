/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.Command;

import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;

import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;


import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;

import java.io.IOException;
import java.util.ArrayList;
import static java.util.Collections.list;
import outdooor.MyApplication;

import outdoor.Services.serviceproduit;
import outdoor.entities.Commande;
import outdoor.entities.produit;
import outdoor.utils.statics;

/**
 *
 * @author maryem
 */
public class listeproduits extends Form {
    
    Form current;
   static produit activeSalle=null;
   public static final String ACCOUNT_SID = "ACfd9dc4e8685deb00df75e5bd97d09571";
         public static final String AUTH_TOKEN ="f3a42dd2166ad3248f8eda2b77c2242d";
   final ArrayList<produit> favoris=statics.favoris;
   
   
    public listeproduits(Form previous) {
         current = this;
         current.setScrollableY(true);
         
         produit produit = new produit();
         serviceproduit su= new serviceproduit();
                  ArrayList<produit> produits=su.getAllproduits();

          ImageViewer img = null;
          Image image;
          Label label;
          
          TextField search=new TextField();
         
         produits=serviceproduit.getInstance().getAllproduits();
         
         search.addActionListener(e->{
             ArrayList<produit> produitss=su.rechProduits(search.getText());
                 new rechercheForm(current,produitss).show();
                 }
         );
         int i;
         add(search);
         //Container c =new Container(new BoxLayout(BoxLayout.Y_AXIS));
        /*
         Style sc=c.getAllStyles();
         sc.setBorder(Border.createEmpty());
         sc.setBackgroundType(BACKGROUND_NONE);
         sc.setBgTransparency(255);
         sc.setBgColor(0x000000);
            
           sc.setFgColor(0x000000);
           

         */
         
      //   Image placeholder = Image.createImage(label.getIcon().getWidth(), label.getIcon().getWidth(), 0xbfc9d2);
//EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
         int deviceWidth = Display.getInstance().getDisplayWidth();
         Image placeholder = Image.createImage(500, 600 , 0xbfc9d2); 
         EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        try {
            //String urlimg="file:///C:/Users/maryem/pideeev/public/uploads/images/";
            Image placeholder2 = Image.createImage(500, 900 , 0xbfc9d2); 
         EncodedImage encImage2 = EncodedImage.createFromImage(placeholder2, false);
         String urlimg="https://i.ibb.co/B4B53Lx/loggo.jpg";
          add(URLImage.createToStorage(encImage2, "Large_"+urlimg, urlimg, URLImage.RESIZE_SCALE));
            //add(urlimg);
            
            
            Image logo=Image.createImage("/bkg.jpg");
            
            ImageViewer iv = new ImageViewer(logo);
            //add(iv);
        } catch (IOException ex) {
            
        }
        String urlimg="";
              for (produit r : produits) {
             Container c2 =new Container(new BoxLayout(BoxLayout.Y_AXIS));
             Container c3 =new Container(new BoxLayout(BoxLayout.Y_AXIS));
             
             Label name=new Label(r.getNomP());
             Label desc=new Label(r.getDescription());
             Label prix=new Label(r.getPrix());
            
             
             final produit s=r;
            
            Button btnt = new Button("");
           // btnt.addActionListener(e -> new SingleMovie(current,m).show());
                                  
                    
                                   
          
            c2.setLeadComponent(btnt);
             urlimg="file:///C:/Users/maryem/pideeev/public/uploads/images/"+r.getImage();
            
             String path="C:/Users/maryem/Pictures/Saved Pictures/";
             System.err.println(urlimg);
             c3.add(URLImage.createToStorage(encImage, path + urlimg, urlimg, URLImage.RESIZE_SCALE));
             c2.add(FlowLayout.encloseCenter(name));
             c2.add(FlowLayout.encloseCenter(desc));
             c2.add(FlowLayout.encloseCenter(prix));
             
            c3.getAllStyles().setPadding(TOP, BOTTOM, 300, 100);
            c2.getAllStyles().setPadding(TOP, BOTTOM, 400, 100);
             add(c3);
             add(c2);
             
             Button Ajouter = new Button("Ajouter");
                c3.add(Ajouter);
                Ajouter.getAllStyles().setBgColor(0xF36B08);
                Ajouter.addActionListener(e -> {
                    Dialog alert = new Dialog("Attention!");
                                        Container cc = new Container(BoxLayout.y());
                    SpanLabel message = new SpanLabel("ajouter une commande");
                    TextArea tfQuantite = new TextArea("veuillez saisir la quantite", 3, 10);
                    setTitle("Quantite");
                    setLayout(BoxLayout.y());
                    

                    SpanLabel catii = new SpanLabel("Image :" + r.getImage());

                
                                        cc.add(message);
                                                            cc.add(tfQuantite);
                    alert.add(cc);
                    Container c = new Container(BoxLayout.x());
                    Button ok1 = new Button("Oui");
                    Button cancel = new Button(new Command("Non"));
                    c.add(ok1);
                    c.add(cancel);
                    //User clicks on ok to delete account
                    ok1.addActionListener(new ActionListener() {

                        public void actionPerformed(ActionEvent evt) {
                            System.out.println("1111");
                            if ((tfQuantite.getText().length() == 0)) {
                                Dialog.show("ERREUR", "donner la quantite svp!", new Command("OK"));
                            } else {
                                try {
                                   Commande t = new Commande((int) Integer.parseInt(tfQuantite.getText()));
                                    if (serviceproduit.getInstance().addCommande(t, r.getId())) {
                                        ToastBar.showMessage("Votre Commande est ajoutée", FontImage.MATERIAL_ACCESS_TIME);
                                        Dialog.show("commande ajouter", "Avec succes", new Command("OK"));
                                    } else {
                                        Dialog.show("ERROR", "ERREUR", new Command("OK"));
                                    }
                                } catch (NumberFormatException e) {
                                    Dialog.show("ERROR", "La quantite doit être remplie", new Command("OK"));
                                }

                            }

                            alert.dispose();
                            refreshTheme();
                        }

                    }
                    );

                    alert.add(c);
                 

                    alert.showDialog();
                   
                    new ListeCommande(previous).show();

                });
            
         
           
           
          
         }
         
         
         
         System.out.println("**************");
         System.out.println("");
         
           getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                        e -> previous.showBack()); // Revenir vers l'interface précédente
         
         
        setScrollableY(true);
        
         setScrollableY(true);
       
       // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
    }
    
}
