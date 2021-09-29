<?php
if(!empty($_POST)){
    $liczba=$_POST["liczba"];
    if($liczba<=0){
        echo'Nie można tak' .$liczba;
    }
    else{
        echo sqrt($liczba);
    }
}

?>