var xmlHttp;

function createXMLHttpRequest() {
    if (window.ActiveXObject) // Internet Explorer
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
} //end function createXMLHttpRequest()

function stateChangeSend() {
    if (xmlHttp.readyState == 4 ||
        xmlHttp.readyState == "complete") {
        data = xmlHttp.responseText;

        console.log(data);

        if (data == "successfully") {
            document.getElementById("msg").value = "";
            Notiflix.Notify.Success('ส่งข้อความแล้ว');
        } else {
            Notiflix.Notify.Failure('เกิดข้อผิดพลาดระหว่างส่งข้อความ');
        }
    }
} // end function statechange()

function sendMessage(sender, reciever) {
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChangeSend;
    var sendID = sender;
    var recieverID = reciever;
    console.log(sender + "  " + reciever);
    var mess = document.getElementById("msg").value;
    var param = "sendID=" + sendID + "&reciever=" + recieverID + "&mess=" + mess;

    var url = "messageSave.php";
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttp.send(param);
}



function stateSchangeCheckSys() {
    if (xmlHttp.readyState == 4 ||
        xmlHttp.readyState == "complete") {
        var data = xmlHttp.responseText;

        //alert(data);
        if (data == "successfully") {

            window.location.reload(true);
        }

    }
}

function CheckSys(x) {
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateSchangeCheckSys;
    var id = x;
    var param = "id=" + id;
    var url = "checkSys.php";
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttp.send(param);
}