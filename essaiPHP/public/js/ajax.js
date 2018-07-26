AJAX = {

  req: new XMLHttpRequest(),

  init : function () {
    var btn = document.querySelector('input[name=envoie]');
    btn.addEventListener('click',AJAX.test);

  },

  test: function (){

    var donnees = document.querySelector('textarea[name=champ]').value;

    AJAX.req.onload = function(){

      var retour = AJAX.req.responseText;
      console.log(typeof retour);


    }


    AJAX.req.open('POST', 'index.php', true);
    AJAX.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    AJAX.req.send('donnees='.concat(donnees));
  }
}

window.onload = AJAX.init;
