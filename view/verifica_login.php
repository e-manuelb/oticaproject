<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: src/index.php');
	exit();
}
?>