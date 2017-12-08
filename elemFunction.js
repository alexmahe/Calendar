function showElem(idDiv) {
    document.getElementById(idDiv).style.display = "block";
}

function hideElem(idDiv) {
    document.getElementById(idDiv).style.display = "none";
}

function emptyElem(idDiv) {
    document.getElementById(idDiv).innerHTML = "";
}

function toggleElemView(idDiv) {
    if(document.getElementById(idDiv).style.display === "none"){
        showElem(idDiv);
    }
    else{
        hideElem(idDiv);
    }
}