<?php
//For send emails you need a server smtp or can do you use a gmail account setup with your localhost.
$e1 = "correo1@gmail.com";
$e2 = "contacto2@cualquiercosa.com";
$e3 = "contacto3@cualquiercosa.com";

$n = $_POST["nombre"];
$c = $_POST["correo"];
$s = $_POST["sele"];
$m = $_POST["mensaje"];

$w = "Nombre : ".$n."\n\nCorreo : ".$c."\n\nMensaje :\n\n".$m;

$h = "Content-Type: text/plain;charset=UTF-8"."\r\n";
$h.="From:tucorreo@servidor.com"."\r\n";

if ( $s == "op1" ) {

 $e =$e1;
  
}
elseif ( $s == "op2" ) {

$e = $e2;
    

}
elseif ( $s == "op3" ) {

$e = $e3;

}
$correo=mail($e,"Consulta",$w,$h);

if ($correo)
    
{
    echo "Mensaje enviado.";

} else
{
echo "Falló. Vuelve a intentarlo.";
}

?>