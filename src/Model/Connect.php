<?php 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', 'Cambodge93250', 'blog');
/* Définir le jeu de caractère désiré après avoir établie une connexion */

printf("Success... %s\n", $mysqli->host_info);