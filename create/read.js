var xhrShowAll = getXMLHttpRequest();
var xhrShowDate = getXMLHttpRequest();

function showAll(callback){
    xhrShowAll.onreadystatechange = function () {
        if (xhrShowAll.readyState === 4 && xhrShowAll.status === 200) {
            callback(xhrShowAll.responseText);
        }
    };

    xhrShowAll.open("GET", "showAll.php", true);
    xhrShowAll.send(null);
}

function showDate(callback){
    console.log(document.getElementById("date").value);

    xhrShowDate.onreadystatechange = function () {
        console.log(xhrShowDate.readyState, xhrShowDate.status);
        if (xhrShowDate.readyState === 4 && xhrShowDate.status === 200){
            callback(xhrShowDate.responseText);
        }
    };

    xhrShowDate.open("POST", "showDate.php", true);
    xhrShowDate.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhrShowDate.send("date=" + document.getElementById("date").value);
}

function readData(sData) {
    document.getElementById("output").innerHTML = sData;
}