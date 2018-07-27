MOYENNE = {

    req: new XMLHttpRequest(),

    init : function () {
        var btn = document.querySelector('input[name=envoyer]');
        btn.addEventListener('click',MOYENNE.calc);

      },

    calc : function () {

        MOYENNE.req.onload = function(){
            console.log(AJAX.req.status);
            var recup = JSON.parse(MOYENNE.req.response);
            console.log(recup);
            var moyLettre = recup.lettre/recup.count;
            console.log(moyLettre);
            var moyMot = recup.mot/recup.count;
            console.log(moyMot);
            var moyPhrase = recup.phrase/recup.count;
            console.log(moyPhrase);
            
           
        }



        MOYENNE.req.open('POST', 'Modele/root.php', true);
        MOYENNE.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        MOYENNE.req.send();
    }

};
