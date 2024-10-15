function validerFormulaire(){
    document.getElementById('addTravelOfferForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let bool=true

        document.getElementById('titleER').innerText = '';
        let title = document.getElementById('title').value;
        if(title.length<3){
            document.getElementById('titleER').innerText = "Le titre doit contenir au moins 3 caractères.";
            bool=false;
        }
            else{
                document.getElementById('titleER').innerText = "correct.";
                document.getElementById("titleER").style.color = "green";
                bool=true;

            }

        document.getElementById('destER').innerText = '';
        let dest = document.getElementById('destination').value;
        const tst = /^[A-Za-z\s]+$/;
        if (!tst.test(dest) || dest.length < 3){
            document.getElementById("destER").innerText="La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.";
            bool=false;
        }else{
            document.getElementById('destER').innerText = "correct";
            document.getElementById("destER").style.color = "green";
            bool=true;

        }

        document.getElementById('dpdateER').innerText = '';
        let dpdate = document.getElementById('departure_date').value;
        if((isNaN(new Date(dpdate).getTime()))){
            document.getElementById("dpdateER").innerText="Veuillez entrer une date de départ valide";
            bool=false;
        }else{
            document.getElementById('dpdateER').innerText = "correct";
            document.getElementById("dpdateER").style.color = "green";
            bool=true;
        }

        document.getElementById('rtdateER').innerText = '';
        let rtdate = document.getElementById('return_date').value;
        if (isNaN(new Date(rtdate).getTime()) || new Date(rtdate) <= new Date(dpdate)){
            document.getElementById("rtdateER").innerText="La date de retour doit être une date valide et ultérieure à la date de départ.";
            bool=false;

        }else{
            document.getElementById('rtdateER').innerText = "correct";
            document.getElementById("rtdateER").style.color = "green";
            bool=true;
        }
        document.getElementById('prixER').innerText = '';
        let prix = document.getElementById('price').value;
        if(isNaN(prix)||prix<=0){
            document.getElementById('prixER').innerText=" Le prix doit être un nombre positif.";
            bool=false;

        }else{
            document.getElementById('prixER').innerText = "correct";
            document.getElementById("prixER").style.color = "green";
            bool=true;
        }
        if(bool){
            alert("offre ajoute avec succes");

        }



    })

}