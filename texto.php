<?php

$texto = $_REQUEST['nome'];
$texto1 = $_REQUEST['idade'];
$texto2 = $_REQUEST['telefone'];
$texto3 = $_REQUEST['comentario'];
$arquivo = fopen("forms.txt" , "w");

fwrite($arquivo , "$texto  $texto1  $texto2  $texto3");


?>