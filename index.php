<?php

//Incluyo los archivos necesarios
require("modelo.php");
require("controlador.php");
//prueba git
//Instancio el controlador
$controlador = new ArchivoControlador;

//Ejecuto el método
$controlador->index();