<?php
session_start();
unset($_SESSION['client']);
header('Location: ../my/index.php');
?>