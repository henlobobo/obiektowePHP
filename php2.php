<?php
if(!empty($_POST)){

        
   // $liczba=$_POST["liczba"];
    /*
    if($liczba<=0){
        echo'Nie można tak' .$liczba;
    }
    else{
        echo sqrt($liczba);
    }

*/
 echo ($_POST["liczba"]<=0) ?   'Nie można tak' .$_POST["liczba"] :  sqrt($_POST["liczba"]);
}
?>
