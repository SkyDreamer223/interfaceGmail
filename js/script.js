document.addEventListener("DOMContentLoaded",()=>{
    console.log("loaded");

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    class Compte{
        constructor(){
            this.nom = document.getElementById("nom").value;
            this.prenom = document.getElementById("prenom").value;
            this.mail = document.getElementById("mail").value;
            this.password = document.getElementById("psw").value;
        }
        showCompte(){
            console.log(this.nom);
            console.log(this.prenom);
            console.log(this.mail);
            console.log(this.password);
            console.log(validateEmail(this.mail))
        }
        verfif(){
            return (this.nom != "" && this.prenom != "" && this.mail != "" && this.password.length != 0 && validateEmail(this.mail));
        }
    }
    let submit = document.getElementById('submit');

    submit.addEventListener('click', (e)=>{
        
        
        let compte = new Compte();
        compte.showCompte();
        if (!compte.verfif()){
            e.preventDefault();
            console.log(validateEmail(compte.mail))
            document.getElementById("warning").style.display = "block";
        }
    })
})