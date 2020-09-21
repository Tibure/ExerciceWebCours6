<?php
session_start();
if( strrev($_POST['password']) == $_POST['username'])
{
    $_SESSION['connected'] = true;
    $_SESSION['first_name'] =$_POST['username'];
    header('Location: connected.php');
}
else {
    header('Location: erreur.php');
}

?>