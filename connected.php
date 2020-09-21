<?php 
session_start();
if(isset($_SESSION["connected"]))
{
    echo 'Vous êtes connecté en tant que '.$_SESSION["first_name"];
}
else {
    header('Location: exercice.php');
}

?>