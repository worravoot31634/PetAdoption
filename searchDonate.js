var xmlHttp;
type="text/javascript"
function createXMLHttpRequest()
{
if (window.ActiveXObject) // Internet Explorer
{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
else // Firefox, Opera 8.0+, Safari
{
    
xmlHttp=new XMLHttpRequest();
}
} //end function createXMLHttpRequest()


function stateChange()
{
    
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{
obj = JSON.parse(xmlHttp.responseText);
suml=obj.length;
if(obj[0].roles!="nonMember"){
    if(obj!=0){
        url1 = "donateSubmitLogin.php";
    }else{
        url1 = "donateSubmitOrganization.php";
    }
    for(i=0;i<suml;i++){
        k=(i-1);
        if(i%2==0){
            $("#search").append(
                    "<div class='w3-row' style='width: 100%;margin:auto' id='search"+i+"' >"+
                    "<!--row  half right side11-->"+
                    "<div class='w3-half' style='padding: 10px;' >"+
                        "<div class='w3-half colorActivity' style='height: 220px;'>"+
                            "<img src='./Images/"+obj[i].DImage+ "' alt='' srcset='' width='100%' height='auto' style='height: 220px;'>"+
                        "</div> <!-- end of img -->"+

                        "<div class='w3-half colorActivity' style='height: 220px;'>"+

                            "<!--img and text side by side-->"+
                            "<div style='margin-top: 5px;float: left;''>"+
                                "<div style='display:inline-block'>"+
                                    "<img src='./Images/"+obj[i].OImage +"'alt='' srcset='' width='100%'"+
                                        "style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>"+
                                "</div>"+
                                "<div style='display:inline-block'>"+
                                    "<h6 class='w3-left' style='font-size: 14px;'>"+obj[i].fname +" "+obj[i].lname+"</h6>"+
                                "</div>"+
                            "</div>"+
                        " <!-- end of img and text side by side-->"+
                            "<p style='font-size: 1vw;clear: both;'>"+obj[i].donateTitle+"</p>"+
                            "<p style='font-size: 1vw;clear: both;'>"+obj[i].details+"</p>"+

                            "<table style='width: 100%;'>"+
                                "<tr>"+
                                    "<td  style='width: 60%;'>"+
                                "<div class='container' >"+
                                    "<div class='progress' style='height: 0.6cm;'>"+
                                        "<div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:"+obj[i].presen+"% ;''>"+
                                        +obj[i].sumDonate+" บาท"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                                "</td>"+
                                "<td style='width: 40%;'>"+
                                "<button onclick=document.getElementById('"+obj[i].donateID+"').style.display='block'   class='btnEdit'style='width:80%'>บริจาค</button>"+
                                "</td>"+
                            " </tr>"+
                            "</table>"+
                    "</a></div><!-- end of text -->"+
            "</div> <!-- end of row  half right side1-->");
        }else{
            $("#search"+k+"").append(" <!--row  half right side2-->"+
            
            "<div class='w3-half' style='padding: 10px;'>"+
                    "<div class='w3-half colorActivity' style='height: 220px;'>"+
                    " <img src='./Images/"+obj[i].DImage+"' srcset='' width='100%' height='auto' style='height: 220px;'>"+
                    "</div> <!-- end of img -->"+


                    "<div class='w3-half colorActivity' style='height: 220px;'>"+

                    "<!--img and text side by side-->"+
                    "<div style='margin-top: 5px;float: left;''>"+
                        "<div style='display:inline-block'>"+
                        "<img src='./Images/"+obj[i].OImage +"'alt='' srcset='' width='100%'"+
                            " style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>"+
                    " </div>"+
                        "  <div style='display:inline-block'>"+
                                "<h6 class='w3-left' style='font-size: 14px;'>"+obj[i].fname +" "+obj[i].lname+"</h6>"+
                            "</div>"+
                        "</div><!-- end of img and text side by side-->"+

                        "<p style='font-size: 1vw;clear: both;'>"+obj[i].donateTitle+"</p>"+
                        "<p style='font-size: 1vw;clear: both;'>"+obj[i].details+"</p>"+
                        "<table style='width: 100%;''>"+
                            "<tr>"+
                                "<td  style='width: 60%;'>"+
                            "<div class='container' >"+
                                "<div class='progress' style='height: 0.6cm;'>"+
                                    "<div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:"+obj[i].presen+"% ;''>"+
                                    +obj[i].sumDonate+" บาท"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "</td>"+
                            " <td style='width: 40%;'>"+
                            "<button onclick=document.getElementById('"+obj[i].donateID+"').style.display='block'   class='btnEdit'style='width:80%'>บริจาค</button>"+
                            "</td>"+
                            "</tr>"+
                        "</table>"+
            " </a></div><!-- end of text -->"+
        "</div> <!-- end of row  half right side2-->");
        }
        $("#popup").append("<div id='"+obj[i].donateID+"' class='w3-modal'>"+
        
        "<div class='w3-modal-content w3-card-4 w3-animate-zoom'>"+
        "<header class='w3-container w3-8c71c0'> "+
        "<span onclick=document.getElementById('"+obj[i].donateID+"').style.display='none' class='w3-button w3-8c71c0 w3-xlarge w3-display-topright'>&times;</span>"+
        "<b><center><p style='font-size: 30px;margin: 5px; color: #ffffff;'>บริจาค</p></center><b>"+
        "</header>"+
        "<table class='w3-light-grey' style='width: 100%; '>"+
            "<tr style='width: 100%;'>"+
                "<td style='width: 30%;'>"+
                    "<div class='w3-half '  style='width: 100%;'>"+
                            "<img src='./Images/"+obj[i].DImage+"' alt='' srcset='' width='100%' height='100%'>"+
                    "</div> <!-- end of img -->"+
                "</td>"+
                "<td style='width: 50%;'>"+
                    "<div  class='w3-container w3-light-grey'>"+
                                    "<form action='"+url1+"' id='from1' method='post'>"+
                                        "<br>"+
                                    " <p style='font-size: 18px;left: 10%;position:relative;'>ชื่อ-นามสกุล</p>"+
                                        "<center><input type='text' style='width:80%;border: none;border-radius: 2px;' name='donateName'></center>"+
                                        
                                    " <p style='font-size: 18px;left: 10%;position:relative;'>รหัสบัตรเครดิต</p>"+
                                        "<center><input type='test' style='width:80%;border: none;border-radius: 2px;' name='creditCard'></center>"+

                                        "<p style='font-size: 18px;left: 10%;position:relative;'>CVV</p>"+
                                        "<center><input type='text' style='width:80%;border: none;border-radius: 2px;' name='CVV'></center>"+
                                        
                                        "<p style='font-size: 18px;left: 10%;position:relative;'>วันที่</p>"+
                                        "<center><p style='font-size: 18px;position:relative;' >"+new Date().toDateString()+"</p></center>"+

                                        "<p style='font-size: 18px;left: 10%;position:relative;'>จำนวนเงิน</p>"+
                                        "<center><input type='text' style='width:80%;border: none;border-radius: 2px;' name='donate'></center>"+
                                        "<br>"+
                                        "<input type='hidden' name='donateID' value='"+obj[i].donateID+"'>"+
                                        "<input type='hidden' name='accountID' value='"+obj[i].accountID+"' >"+
                                        
                        "<div class='w3-container w3-padding'>"+
                            "<button class='btnEdit w3-right ' onclick=document.getElementById('"+obj[i].donateID+"').style.display='none' style='height: 1cm;'>ยกเลิก</button>"+
                            "<button class='btnEdit w3-left  ' type='submit'  style='height: 1cm;'>บริจาค</button>"+
                            "</form>"+
                        "</div>"+
                        
                    "</div>"+
                "</td>"+
            "</tr>"+
        "</table>"+
        
        "</div>"+
    "</div>");
    }
}else{
    for(i=0;i<suml;i++){
        k=(i-1);
        if(i%2==0){
            $("#search").append(
                    "<div class='w3-row' style='width: 100%;margin:auto' id='search"+i+"' >"+
                    "<!--row  half right side11-->"+
                    "<div class='w3-half' style='padding: 10px;' >"+
                        "<div class='w3-half colorActivity' style='height: 220px;'>"+
                            "<img src='./Images/"+obj[i].DImage+ "' alt='' srcset='' width='100%' height='auto' style='height: 220px;'>"+
                        "</div> <!-- end of img -->"+

                        "<div class='w3-half colorActivity' style='height: 220px;'>"+

                            "<!--img and text side by side-->"+
                            "<div style='margin-top: 5px;float: left;''>"+
                                "<div style='display:inline-block'>"+
                                    "<img src='./Images/"+obj[i].OImage +"'alt='' srcset='' width='100%'"+
                                        "style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>"+
                                "</div>"+
                                "<div style='display:inline-block'>"+
                                    "<h6 class='w3-left' style='font-size: 14px;'>"+obj[i].fname +" "+obj[i].lname+"</h6>"+
                                "</div>"+
                            "</div>"+
                        " <!-- end of img and text side by side-->"+
                            "<p style='font-size: 1vw;clear: both;'>"+obj[i].donateTitle+"</p>"+
                            "<p style='font-size: 1vw;clear: both;'>"+obj[i].details+"</p>"+

                            "<table style='width: 100%;'>"+
                                "<tr>"+
                                    "<td  style='width: 60%;'>"+
                                "<div class='container' >"+
                                    "<div class='progress' style='height: 0.6cm;'>"+
                                        "<div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:"+obj[i].presen+"% ;''>"+
                                        +obj[i].sumDonate+" บาท"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                                "</td>"+
                                "<td style='width: 40%;'>"+
                                "<a href = 'login.php'><button class='btnEdit'style='width:80%'>บริจาค</button></a>"+
                                "</td>"+
                            " </tr>"+
                            "</table>"+
                    "</a></div><!-- end of text -->"+
            "</div> <!-- end of row  half right side1-->");
        }else{
            $("#search"+k+"").append(" <!--row  half right side2-->"+
            
            "<div class='w3-half' style='padding: 10px;'>"+
                    "<div class='w3-half colorActivity' style='height: 220px;'>"+
                    " <img src='./Images/"+obj[i].DImage+"' srcset='' width='100%' height='auto' style='height: 220px;'>"+
                    "</div> <!-- end of img -->"+


                    "<div class='w3-half colorActivity' style='height: 220px;'>"+

                    "<!--img and text side by side-->"+
                    "<div style='margin-top: 5px;float: left;''>"+
                        "<div style='display:inline-block'>"+
                        "<img src='./Images/"+obj[i].OImage +"'alt='' srcset='' width='100%'"+
                            " style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>"+
                    " </div>"+
                        "  <div style='display:inline-block'>"+
                                "<h6 class='w3-left' style='font-size: 14px;'>"+obj[i].fname +" "+obj[i].lname+"</h6>"+
                            "</div>"+
                        "</div><!-- end of img and text side by side-->"+

                        "<p style='font-size: 1vw;clear: both;'>"+obj[i].donateTitle+"</p>"+
                        "<p style='font-size: 1vw;clear: both;'>"+obj[i].details+"</p>"+
                        "<table style='width: 100%;''>"+
                            "<tr>"+
                                "<td  style='width: 60%;'>"+
                            "<div class='container' >"+
                                "<div class='progress' style='height: 0.6cm;'>"+
                                    "<div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:"+obj[i].presen+"% ;''>"+
                                    +obj[i].sumDonate+" บาท"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "</td>"+
                            " <td style='width: 40%;'>"+
                            "<a href = 'login.php'><button class='btnEdit'style='width:80%'>บริจาค</button></a>"+
                            "</td>"+
                            "</tr>"+
                        "</table>"+
            " </a></div><!-- end of text -->"+
        "</div> <!-- end of row  half right side2-->");
        }
    }

}
}


} // end function statechange()
function showHint(str,str2,int,str3)
{
createXMLHttpRequest();
xmlHttp.onreadystatechange = stateChange;
var url = "donateSearch.php";
url = url + "?donateTitle=" + str+"&province="+str2+"&accountID="+int+"&roles="+str3; //url = "greeting.php?day=Monday"
//alert(url);
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
} //end function showHint(str)