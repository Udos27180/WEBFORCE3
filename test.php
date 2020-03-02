<?php
sleep(2);
$nom = isset($_GET['nom']) ? $_GET['nom'] : "pas de nom";
echo "Salut " . $nom;

?>
