//fonctions pour les modifications de compte et pour la suppression
function changeAddressFunction() {
  var str = document.forms["changeAddressForm"]["newAddress"].value;
  if (str.length == 0) {
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("adresse").innerHTML = this.responseText;
        document.getElementsByName('newAddress')[0].value = "";
      }
    };
    xmlhttp.open("GET", "../model/change_user_address.php?newAddress=" + str, true);
    xmlhttp.send();
    alert("Adresse changée");
  }
}

function changeCardFunction() {
  var str = document.forms["changeCardForm"]["newCard"].value;
  if (str.length == 0) {
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("carte").innerHTML = this.responseText;
        document.getElementsByName('newCard')[0].value = "";
      }
    };
    xmlhttp.open("GET", "../model/change_user_card.php?newCard=" + str, true);
    xmlhttp.send();
    alert("Carte changée");
  }
}

function changeNameFunction() {
  var str = document.forms["changeNameForm"]["newName"].value;
  if (str.length == 0) {
    document.getElementById("nomTitre").innerHTML = "";
    document.getElementById("nomChangement").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("nomTitre").innerHTML = this.responseText;
        document.getElementById("nomChangement").innerHTML = this.responseText;
        document.getElementsByName('newName')[0].value = "";
      }
    };
    xmlhttp.open("GET", "../model/change_user_name.php?newName=" + str, true);
    xmlhttp.send();
    alert("Nom d'utilisateur changé");
  }
}

function deleteAccountFunction() {
  if ( confirm( "Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez." ) ) {
    // Code à éxécuter si le l'utilisateur clique sur "OK"
    window.location = "../model/delete_user.php";
  } else {
    // Code à éxécuter si l'utilisateur clique sur "Annuler"
    return;
  }
}

function logoutFunction() {
  if ( confirm( "Vous allez être déconnecté.\n   Cliquez sur 'OK' pour confirmer, ou annulez." ) ) {
    // Code à éxécuter si le l'utilisateur clique sur "OK"
    window.location = "../model/logout.php";
  } else {
    // Code à éxécuter si l'utilisateur clique sur "Annuler"
    return;
  }
}
