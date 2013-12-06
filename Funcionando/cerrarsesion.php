<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: inicio.php");
}
session_destroy();
header("Location: inicio.php");

?>
