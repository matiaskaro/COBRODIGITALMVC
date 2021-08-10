<?php
class ArchivoControlador{
function index(){
$nom=new Archivos();
$linea=$nom->getNombrear();
require_once("./vista.php");
}
}
?>
