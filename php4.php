<?php
$p=$_POST["p"];
switch($p){
    case 1: echo'Brak promocji do następnej klasy'; break;
    case 6: echo'Promocja z oceną celującą'; break;
    default: echo 'Promocja do następnej klasy'; break;
}
?>
