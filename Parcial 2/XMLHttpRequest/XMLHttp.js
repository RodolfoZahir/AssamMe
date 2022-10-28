window.onload = function(){
    document.getElementById("btnajax").addEventListener("click", SolicitarHeader);
    function SolicitarHeader(){
        var Solicitud = new XMLHttpRequest();
        Solicitud.onreadystatechange=function(){
            if (Solicitud.readyState == 4 && Solicitud.status==200){
                document.getElementById("Prueba").innerHTML=Solicitud.responseText;
            }
        }
        Solicitud.open("GET","XMLHttp.txt",true);
        Solicitud.send();
    }
}