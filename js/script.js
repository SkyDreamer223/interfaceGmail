document.addEventListener("DOMContentLoaded",()=>{
    console.log("loaded");
    class Compte{
        constructor(nom, prenom, mail, password){
            this.nom = nom;
            this.prenom = prenom;
            this.mail = mail;
            this.password = password;
        }
        showCompte(){
            console.log(this.nom);
            console.log(this.prenom);
            console.log(this.mail);
            console.log(this.password);
        }
    }
    let submit = document.getElementById('submit');

    submit.addEventListener('click', (e)=>{
        e.preventDefault();
        let nom = document.getElementById("nom").value;
        let prenom = document.getElementById("prenom").value;
        let mail = document.getElementById("mail").value;
        let password = document.getElementById("psw").value;
        let compte = new Compte(nom, prenom, mail, password);
        compte.showCompte();
        if(nom !='' && prenom !='' && mail!='' && password !=''){
            localStorage.setItem("nom", compte.nom);
            document.location.assign("login.html"); 
        }
        else {
            document.getElementById("warning").style.display = "block";
        }
        

    })

})