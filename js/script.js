var xmlHttp;
function createXMLHttpRequest() {
    if (window.ActiveXObject) // Internet Explorer
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
} //end function createXMLHttpRequest()

function stateChange() {
    if (xmlHttp.readyState == 4 ||
        xmlHttp.readyState == "complete") {
        var a = xmlHttp.responseText;
        //alert(xmlHttp.responseText);
        alert(a);
    }
} // end function statechange()

function addNewPet() {
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "addNewPet";

    //url = "greeting.php?day=Monday"
    alert(url);
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}