document.addEventListener("DOMContentLoaded", ()=>{

    let h2 = document.getElementById("warningH2");

    if(h2.value == ""){
        h2.style.display="none";
        console.log("flag")
    }
})