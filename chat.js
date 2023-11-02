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