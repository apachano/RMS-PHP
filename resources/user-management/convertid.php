<?php

require("resources/configuration/constant.php");

$id_length = strlen($id);

if($id_length == 3){
$id = $storenumber . $id;
}elseif($id_length == 2){
$id = $storenumber . "0" . $id;
}elseif($id_length == 1){
$id = $storenumber . "00" . $id;
}