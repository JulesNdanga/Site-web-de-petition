 //Initialisation des variables
 var chatContainer = $(".chat-content-msg");
 //var username = "";
 var chatMsgCount = 0;
 var chatMsgAlert = $("#chat-header-msg-alert ")

 function ai(message){
    /* if(username.length == 0){
         username = message;
         send_message("Enchanté de faire ta connaissance " + username + ". Quoi de neuf?");
     }*/

     if(message.indexOf("je vais bien") >= 0 || message.indexOf("je vais") >= 0 || message.indexOf("ça") >= 0 || message.indexOf("il y") >= 0 || message.indexOf("ca va") >= 0 || message.indexOf("xava") >= 0 || message.indexOf("il ya") >= 0){
         send_message("Cool!Et si non,le site te plaît-il?");
     }

     if(message.indexOf("plaît") >= 0 || message.indexOf("oui")  >=0 || message.indexOf("Plaît") >= 0 || message.indexOf("Oui") >= 0 ){
         send_message("☺ je suis ravis que sa te plaîse,n'oublie pas d'aller voir les pétitions et signer.Et Poste en une.");
     }
     if(message.indexOf("j'aime") >= 0 || message.indexOf("J'aime")  >=0){
         send_message("☺ je suis ravis que sa te plaîse,n'oublie pas d'aller voir les pétitions et signer.Et Poste en une si tu as le temps.");
     }

     if( message.indexOf("non")  >=0 || message.indexOf("Non") >= 0 ){
         send_message(":-( buff,tout le monde ne peux pas aimer ce que tu fais dans la vie. Hum hum hum🤔,je vais supprimer ton compte et je vais aussi partager tout tes infos.");
     }
     if(message.indexOf("rien") >= 0 || message.indexOf("Rien") >= 0){
         send_message("Menteur (^_^),il y'a toujours quelque chose.");
     }

     if(message.indexOf("un peu") >= 0 || message.indexOf("Un peu") >= 0){
         send_message("Dans la vie soit on aime,soit on aime pas.");
     }


     if(message.indexOf("comment vas tu") >= 0 || message.indexOf("Comment vas tu") >= 0){
        send_message("Super bien et toi?");
    }

     if(message.indexOf("aide") >= 0 || message.indexOf("Aide") >= 0){
         send_message("Que veux-tu savoir?");
     }

     if(message.indexOf("tout") >= 0 || message.indexOf("Tout") >= 0){
         send_message("Tu es sur un site de pétition developper, par Jules Ndanga et Mouafo P.pour plus d'infos va voir dans la rubrique aide situer au pied de page.");
     }


     if(message.indexOf("Quel pays") >= 0){
        send_message("Je suis du Cameroun");
    }

    if(message.indexOf("passion") >= 0){
        send_message("J'adore l'informatique (^_^)");
    }

    if(message.indexOf("racine carrée") >= 0){
        send_message("La racine carrée de 25 est 5. Facile !");
    }

    if(message.indexOf("nj") >= 0){
        send_message("Le grand programmeur");
    }

    if(message.indexOf("moi aussi") >= 0){
        send_message("C'est cool ça !");
    }

    if(message.indexOf("age") >= 0){
        send_message("Imagine ?");
    }

    if(message.indexOf("bye") >= 0){
        send_message("Déja? Okey @+");
    }

    if(message.indexOf("heure") >= 0){
        var date = new Date();
        var h = date.getHours();
        var m = date.getMinutes();
        send_message("Il est actuellement " + h + "h" +m);
    }

    if(chatMsgCount > 0){
        chatMsgAlert.fadeIn(1200);
    }

 }

 

 //Envoi des messages
 function send_message(message){
     if(chatContainer.html() != ""){
         chatContainer.append("<br/>");
     }

     chatContainer.append('<span class="current_message"><span class="chat-bot"><br>NJ : </span>' + message + "</span>");
     $(".current_message").hide();
     $(".current_message").delay(1000).fadeIn();
     $(".current_message").removeClass("current_message");

     //nouveau message
     ++chatMsgCount;
 }

 
 

 
 $(function(){
     var chat_replie_hauteur = 16,
      chat_etendu_hauteur = 250,
      chat_temps_ouverture = 500,
      chat_temps_fermeture = 1000;

      //bouton fermer
    $(".chat-header-closer").click(function(){
        $(".chat").fadeOut(500);
    });
    //Premier message envoyer
    send_message("Salut, comment vas-tu?");

     $(".chat-header").click(function(){
         var chat = $(".chat"),
         chat_hauteur_courante = chat.height();

         if(chat_hauteur_courante == chat_replie_hauteur){
             chat.animate(
                 {
                     height: chat_etendu_hauteur
                    },
                 chat_temps_ouverture
             );
         }
         else{
             chat.animate(
                 {
                     height: chat_replie_hauteur
                    },
                 chat_temps_fermeture
             );
         }
        });

     //on cache le point rouge qui signale un msg

     $(".chat-content-input").keypress(function(event){
         chatMsgCount = 0;
         chatMsgAlert.fadeOut();

         //si l'utilisateur tape la touche "Entrer"
         if(event.which == 13){
             event.preventDefault();
             var myname = '<span class="chat-username"><br>Toi : </span>';
             var userMessage = $(this).val();

             //On vie le textarea apres envoi du message
             $(this).val("");

             if(chatContainer.html() != ""){
                 chatContainer.append("<br/>");
             }

             chatContainer.append(myname + userMessage);
             ai(userMessage);
         }
     });
    });
