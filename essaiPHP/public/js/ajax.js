AJAX = {

  req: new XMLHttpRequest(),

  init : function () {
    var btn = document.querySelector('input[name=envoie]');
    btn.addEventListener('click',AJAX.test);

  },

  test: function () {

    var valeur = document.querySelector('textarea[name=champ]').value;

    AJAX.req.onload = function(){

      var retour = AJAX.req.responseText;
      console.log(retour);
      console.log(typeof retour);


    }


    AJAX.req.open('POST', 'index.php', true);
    AJAX.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    AJAX.req.send('donnees='.concat(valeur));

  }
};

window.onload = AJAX.init;
