<?php 
require_once 'conecta.php';
session_start();
session_destroy();
header("Location:../");
