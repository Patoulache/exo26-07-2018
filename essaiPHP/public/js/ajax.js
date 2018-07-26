AJAX = {

  req: new XMLHttpRequest(),

  init : function () {
    var btn = document.querySelector('input[name=envoie]');
    btn.addEventListener('click',AJAX.test);

  },

  test: function (){

    var form1= [];
    var test = document.querySelectorAll('.valeur');

    AJAX.req.onload = function(){

      console.log(AJAX.req.status);
      var recup= JSON.parse(AJAX.req.responseText);
      console.log(recup);
      console.log(recup.nom);
     // MIRROIR.init3();
    }

    console.log(form1);

    AJAX.req.open('POST', 'transfo.php', true);
    AJAX.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    AJAX.req.send('donnees='.concat(form1));
  }
}


window.onload = AJAX.init;
