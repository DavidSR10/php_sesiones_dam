<?php
echo '<h2>Sesiones y cookies</h2>';
setcookie("pingacock","true");
echo var_dump($_COOKIE);
if ($_COOKIE['pingacock']=="true"){
    echo "has aceptado la privacidad";
}
else{
    echo "no hay cookies";
}
session_start();
$_SESSION['busqueda']="camisa";