<?php 
require_once 'conecta.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$usuario = $_POST['usuario'];
	$email   = $_POST['email'];
	$texto   = $_POST['texto'];
	$inserir = "INSERT INTO contato (usuario, email, texto) VALUES ('$usuario', '$email', '$texto')";
	$query   = mysqli_query($con, $inserir);
	header("Location:contato.php");

}else{
	header("Location:contato.php?1");
}
