<?php
$liczba1=$_POST["liczba1"];
$liczba2=$_POST["liczba2"];
if($liczba1>$liczba2)
{
    echo $liczba1 . '>' . $liczba2;
}
elseif($liczba1<$liczba2)
{
    echo $liczba1 . '<' . $liczba2;
}
else
{
    echo $liczba1 . '=' . $liczba2;
}
?>
