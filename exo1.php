<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus).</p>

<?php

$str = "Notre formation DL commence aujourd'hui";
$nbChar = strlen($str);

echo "La phrase \"$str\" comporte $nbChar charactères" ;


?>

<?php require "elements/footer.php";?>