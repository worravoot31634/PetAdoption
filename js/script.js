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

function sendMessage() {
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var sendID = 1;
    var recieverID = 2;
    var mess = document.getElementById("msg").value;
    var param = "sendID=" + sendID + "&reciever=" + recieverID + "&mess=" + mess;

    var url = "messageSave.php";
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttp.send(param);
} 