<?php

$name = $_GET['name'];

$name = strtoupper( $name );

echo '<p>Bonjour votre nom est: ' . $name .'</p>';
echo '<p>Ceci est la deuxième ligne</p>';

?>