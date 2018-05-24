var lastColor = null;
var elemen = null;
function setDay(elmt,i){
    //if(var elemen != null)elmt.style.backgroundColor = "blue";
    if(elemen)elemen.style.backgroundColor = lastColor;
    document.getElementById("day").value = i;
    lastColor = elmt.style.backgroundColor;
    elmt.style.backgroundColor = "black";
    elemen = elmt;
}
function val_form(){

    var day = val_day();
    var note = val_note();

    if(!(day && note)){
        return false;
    }
    else{
        document.getElementById("errText").innerHTML = "";
        alert("Sukses insert Schedule");
    }

}
function val_day(){
    var day = document.getElementById("day").value;
    if(day == null || day == 0){
        document.getElementById("errText").innerHTML = "Day must be choosen";
        return false;
    }else{
        return true;
    }
}
function val_note(){
    var note = document.getElementById("note").value;
    if(note == null || note =="" ){
        document.getElementById("errText").innerHTML = "Note must be filled";
        return false;
    }else{
        return true;
    }
}