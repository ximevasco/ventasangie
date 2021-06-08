<?php
$nom= $_GET['Nombre'];
$articulo= $_GET['Articulo'];
$Marca= $_GET['Marca'];
$talla= $_GET['Talla'];
$Ubica= $_GET['ubicacion'];
$ind= $_GET['Indicaciones'];
$pago= $_GET['pago'];
$numero= $_GET['Telefono'];


echo "DATOS DE FORMULARIO: " ;
echo "<br>" ;
echo "Toma foto y enviamela para guradar tus datos :)" ;
echo "<br>" ;
echo "Tu nombre es: " ;
echo $nom;
echo "<br>" ;
echo "Tu articulo a pedir es: " ;
echo $articulo;
echo "<br>" ;
echo "La marca es: " ;
echo $Marca;
echo "<br>" ;
echo "Eres talla: " ;
echo $talla;
echo "<br>" ;
echo "Se te entregara en: " ;
echo $Ubica;
echo "<br>" ;
echo "Las Indicaciones son: " ;
echo $ind;
echo "<br>" ;
echo "El pago Será: " ;
echo $pago;
echo "<br>" ;
echo "El numero de contacto es: " ;
echo $numero;
?>