document.addEventListener("DOMContentLoaded", ()=>{
    document.getElementById("h1").innerText += " "+localStorage.getItem("nom");
})