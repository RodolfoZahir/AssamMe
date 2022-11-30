<?php
if(isset($_COOKIE['ultimaVisita'])) {
            printf("Rodolfo Zahir Assam Méndez indica que su ultima visita fue: %s",$_COOKIE["ultimaVisita"]);
            
            $fechahoy         = date('Y/m/d H:i:s');
            setcookie("ultimaVisita",$fechahoy,time()+(7*24*60*60));
        }
        else{
            printf("No se encontró cookie de última visita . <br>");
        }

        $fechahoy   =date('Y/m/d H:i:s');
        $siguienteSemana= time()+(7*24*60*60);
        $fechaExpira = date('Y/m/d H:i:s',$siguienteSemana)."<br>";

        echo '<b>Fecha de Creación de Cookie: </b>',$siguienteSemana."<br>";
        echo '<b>Fecha de Vencimiento de Cookie: </b>',$fechaExpira."<br>";

        setcookie("ultimaVisita",$fechahoy,time()+(7*24*60*60));
    
?>