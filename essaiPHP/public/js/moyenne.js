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
            document.querySelector('.moyLettre').innerHTML = "Moyenne lettre = ".concat(moyLettre);
            console.log(moyLettre);
            var moyMot = recup.mot/recup.count;
            document.querySelector('.moyMot').innerHTML = "Moyenne mot = ".concat(moyMot);
            console.log(moyMot);
            var moyPhrase = recup.phrase/recup.count;
            document.querySelector('.moyPhrase').innerHTML = "Moyenne phrase = ".concat(moyPhrase);
            console.log(moyPhrase);
            
           
        }



        MOYENNE.req.open('POST', 'Modele/root.php', true);
        MOYENNE.req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        MOYENNE.req.send();
    }

};
