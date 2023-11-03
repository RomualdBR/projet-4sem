document.getElementById('form_message').addEventListener('submit', function(e) {
    e.preventDefault();
  
    var message = $("#text_message").val();
  
    if (message.length >= 3) {
      $.ajax({
        type: "POST",
        url: "ajaxchat.php",
        data: { envoie_msg: message },
        success: function(response) {
            console.log("réussis")
          $("#text_message").val("");

          displayTchat(message)

        },
        error: function() {
          console.error("Erreur dans l'envoie du message");
        }
      });
    } else {
      alert("Le message doit contenir au moins 3 caractères.");
    }
  });


  function displayTchat(message){

    //Erreur : la fonction Date() n'existe pas

    //var Horraire = new Date();
    //var Year = Horraire.getFullYear();
    //var Month = Horraire.getMonth();
    //var Date = Horraire.getDate();
    //var Hours = Horraire.getHours();
    //var Minutes = Horraire.getMinutes();
    //var Seconds = Horraire.getSeconds();

    var creationTchat = document.createElement('div');
    creationTchat.class = "tchat-usermessage";
    document.getElementById("tchat-message").appendChild(creationTchat);
    console.log("Verif Une OKEY")

    var userAutor = document.createElement('p');
    userAutor.class = "tchat-usermessageinfo autor";
    userAutor.innerHTML = "<?php echo $userConnecter->pseudo ?>";
    console.log("Verif Deux OKEY")

    var userConteiner = document.createElement('p');
    userConteiner.class = "tchat-usermessageconteiner";
    userConteiner.innerHTML = message;
    console.log("Verif Trois OKEY")

    //var dateInfo = document.createElement('p');
    //dateInfo.class = "tchat-usermessageinfo";
    //dateInfo.innerHTML = Year + "-" + Month + "-" + Date + " " + Hours + ":" + Minutes + ":" + Seconds;
    //console.log("Verif Quatre OKEY")


}