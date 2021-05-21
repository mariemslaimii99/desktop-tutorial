/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.TOP;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import java.io.IOException;
import java.util.ArrayList;
import outdoor.Services.serviceproduit;
import outdoor.entities.produit;

/**
 *
 * @author maryem
 */
public class rechercheForm extends Form {
    
    Form current;
   static produit activeSalle=null;
   
   
    public rechercheForm(Form previous, ArrayList<produit> produitss) {
        
            current=this;
            ArrayList<produit> produits=produitss;
            produit produit = new produit();
         serviceproduit su= new serviceproduit();
        
      
         
         
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
        int i;
         for (i = 0; i < produits.size(); i++) {
             Container c2 =new Container(new BoxLayout(BoxLayout.Y_AXIS));
             Container c3 =new Container(new BoxLayout(BoxLayout.Y_AXIS));
             
             Label name=new Label(produits.get(i).getNomP());
             Label desc=new Label(produits.get(i).getDescription());
             Label prix=new Label(produits.get(i).getPrix());
            
             
             final produit s=produits.get(i);
            
            Button btnt = new Button("");
           // btnt.addActionListener(e -> new SingleMovie(current,m).show());
                                  
                    
                                   
          
            c2.setLeadComponent(btnt);
             urlimg="file:///C:/Users/maryem/pideeev/public/uploads/images/"+produits.get(i).getImage();
             
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
             
           
        
    }
    getToolbar().addMaterialCommandToLeftBar("",FontImage.MATERIAL_ARROW_BACK,e->previous.showBack());
    
    }

    
}