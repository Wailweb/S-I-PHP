<?php
// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
$temps = 365*24*3600;

// on envoie un cookie de nom pseudo portant la valeur LA GLOBULE
setcookie ("pseudo", "LA GLOBULE", time() + $temps);
?>
