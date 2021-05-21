/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package outdoor.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import outdoor.entities.Commande;
import outdoor.entities.produit;
import outdoor.Services.ServiceCommande;
import outdoor.Services.serviceproduit;
import outdoor.utils.statics;
import java.util.ArrayList;

/**
 *
 * @author bhk
 */
public class ListeCommande extends Form{

    public ListeCommande(Form previous) {
    
          setTitle("List commande");
        ServiceCommande es = new ServiceCommande();
        ArrayList<Commande> list = es.getAllTasks();

        {
           
            for (Commande a : list) {

          
 
                Container c3 = new Container(BoxLayout.y());
                SpanLabel cat= new SpanLabel("id :" + a.getId());
                               SpanLabel cat1= new SpanLabel("quantite :" + a.getQuantite());

               
                     
                       c3.add(cat);
                             c3.add(cat1);
       //boutton supprimer
                         Button Delete =new Button("Supprimer","LoginButton");
         c3.add(Delete);
            Delete.getAllStyles().setBgColor(0xF36B08);
            Delete.addActionListener(e -> {
               Dialog alert = new Dialog("");
                SpanLabel message = new SpanLabel("votre commande va etre supprimer");
                alert.add(message);
                Button ok = new Button("comfirmer");
                Button cancel = new Button(new Command("annuler"));
                //User clicks on ok to delete account
                ok.addActionListener(new ActionListener() {
                  
                    public void actionPerformed(ActionEvent evt) {
                       es.Delete(a.getId());
                     
                        alert.dispose();
                        refreshTheme();
                    }
                    
                }
                
                
                );

                alert.add(cancel);
                alert.add(ok);
                alert.showDialog();
                
                new ListeCommande(previous).show();
              
                
             
            });
         
                   /*   Label lModifier =new Label(" ");
        Style modifierStyle =new Style(lModifier.getUnselectedStyle());
                FontImage mFrontImage = FontImage.createMaterial (FontImage.MATERIAL_MODE_EDIT, modifierStyle);
                
                lModifier.setIcon(mFrontImage);
                lModifier.setTextPosition(LEFT );
                lModifier.addPointerPressedListener(l->{
                    //System.out.println("hello update");
                    
                    new ModifierCommentaireForm(res,r).show();
                    
                  
                
                
                
                
                
                
                });
 */
         
             
                        
           System.out.println("");
              
 /*c3.add(BorderLayout.CENTER,BoxLayout.encloseY(
                
                
               BoxLayout.encloseX(c3,lModifier)));
        
        */
        
        add(c3);
       
              
             
          getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK , e-> previous.showBack()); // Revenir vers l'interface précédente
                
            }
          
        }
   
            Button btnAjouter = new Button("Valider Panier");
        addStringValue("",btnAjouter);
        
        btnAjouter.addActionListener((e) -> {
            
            try
            {
                          
                    InfiniteProgress ip=new InfiniteProgress();
                    
                    final Dialog iDialog = ip.showInfiniteBlocking();
                    
                   // SimpleDateFormat format=new SimpleDateFormat("yyyy-MM-dd");
                  
                 mailling.sendEmail("ouhibi.azer@esprit.tn","confirmation de commande ","BONJOUR,"
                         + "MERCI D'AVOIR EFFECTUÉ VOS ACHATS !"
                         + "Vous pouvez accéder à tout moment a votre commande ");

                    iDialog.dispose();

                    //baad ajout twa listCategorie(affiche)
                  //  new ListCommentaireForm(res).show();
                    
                    refreshTheme();
                
                       ToastBar.showMessage("Votre commande est validée", FontImage.MATERIAL_ACCESS_TIME);

            
        }catch(Exception ex)
                      {
                         ex.printStackTrace();
                     }});}
    
  private void addStringValue(String s, Component v) {
    //   add(BorderLayout.WEST(new Label(s,"PaddedLabel")));
      add(BorderLayout.west(new Label(s,"PaddedLabel")).add(BorderLayout.CENTER,v));
      
      
      
    }  }