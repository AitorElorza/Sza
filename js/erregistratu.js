function balidatu(event){
    var baliozkoa = true;//baliozko formatuan daude
    var mail = /^\w{1,}@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
    //lortu fomularioko elementuak
    var erabiltzailea = document.getElementById("erabiltzailea").value;
    var eposta = document.getElementById("eposta").value;
    var pasahitza = document.getElementById("pasahitza").value;
    var pasahitza2 = document.getElementById("pasahitza2").value;
    if(erabiltzailea =="" || eposta =="" || pasahitza =="" || pasahitza2 ==""){
        alert("Eremu guztiak bete behar dira");
        baliozkoa = false;
    }else if(mail.test(eposta) == false){
        alert("Epostaren formatua ez da zuzena");
        baliozkoa = false;
    }else if(pasahitza != pasahitza2){
        alert("Pasahitzak ez dira berdinak");
        baliozkoa = false;
    }
    if(baliozkoa == false){
        event.preventDefault();
    }
    
}