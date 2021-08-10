<?php

//Incluyo los archivos necesarios
require("modelo.php");
require("controlador.php");

//Instancio el controlador
$controlador = new ArchivoControlador;

//Ejecuto el método
$controlador->index();