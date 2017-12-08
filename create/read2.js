var xhr = getXMLHttpRequest();

function showAll(callback){
    var date = document.getElementById("date").value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            callback(xhr.responseText);
        }
    };

    xhr.open("POST", "getDataToShow.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    if(date === ""){
        xhr.send(null);
    }
    else{
        xhr.send("date=" + date);
    }
}

/*
function showDate(callback){
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200){
            callback(xhr.responseText);
        }
    };

    xhr.open("POST", "showDate.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("date=" + document.getElementById("date").value);
}
*/
function readData(sData) {
    document.getElementById("output").innerHTML = sData;
}