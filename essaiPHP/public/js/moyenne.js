MOYENNE = {

    req: new XMLHttpRequest(),

    init : function () {
        var btn = document.querySelector('input[name=envoyer]');
        btn.addEventListener('click',MOYENNE.calc);
    
      },

    calc : function () {

        MOYENNE.req.onload = function(){
            console.log(AJAX.req.status);
            var recup= JSON.parse(MOYENNE.req.responseText);
            console.log(recup);

    
    
        }



        MOYENNE.req.open('POST', 'Modele/root.php', true);
        MOYENNE.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        MOYENNE.req.send();
    }

};

window.onload = MOYENNE.init;