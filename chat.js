document
  .getElementById("form_message")
  .addEventListener("submit", function (e) {
    e.preventDefault();

    var message = $("#text_message").val();

    if (message.length >= 3) {
      $.ajax({
        type: "POST",
        url: "ajaxchat.php",
        data: { envoie_msg: message },
        success: function (response) {
          console.log("réussis");
          $("#text_message").val("");

          displayTchat(message);
        },
        error: function () {
          console.error("Erreur dans l'envoie du message");
        },
      });
    } else {
      alert("Le message doit contenir au moins 3 caractères.");
    }
  });

function displayTchat(message) {
  var Horraire = new Date();
  var Year = Horraire.getFullYear();
  var Month = Horraire.getMonth();
  var Day = Horraire.getDate();
  var Hours = Horraire.getHours();
  var Minutes = Horraire.getMinutes();
  var Seconds = Horraire.getSeconds();

  var emplacementMessage = document.querySelector("#tchat-message");

  emplacementMessage.insertAdjacentHTML(
    "afterbegin",
    '<div class="tchat-usermessage">' +
      '<p class="tchat-usermessageinfo autor"></p>' +
      '<p class="tchat-usermessageconteiner">' +
      message +
      '</p>' +
      '<p class="tchat-usermessageinfo">' +
      Year +
      "-" +
      Month +
      "-" +
      Day +
      " " +
      Hours +
      ":" +
      Minutes +
      ":" +
      Seconds +
      "</p>" +
      "</div>"
  );
}
