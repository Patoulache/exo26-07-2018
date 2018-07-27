AJAX = {

  req: new XMLHttpRequest(),

  init : function () {
    var btn = document.querySelector('input[name=envoie]');
    btn.addEventListener('click',AJAX.test);

    MOYENNE.init();

  },

  test: function () {

    var valeur = document.querySelector('textarea[name=champ]').value;

    AJAX.req.onload = function(){

      var retour = JSON.parse(AJAX.req.response);
      console.log(retour);
      // AJAX.ajout(retour);

    }


    AJAX.req.open('POST', 'Modele/root.php', true);
    AJAX.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    AJAX.req.send('donnees='.concat(valeur));

  },

  ajout : function(obj) {

    var newP, contenu;

    for(var key in obj){

      var recupe    = document.querySelector('.'+key);
      newP          = document.createElement('p');
      contenu       = document.createTextNode(obj[key]);

      newP.appendChild(contenu);
      recupe.appendChild(newP);
    }
  },
};

window.onload = AJAX.init;
