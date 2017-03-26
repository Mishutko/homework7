<?php
$idC = $_GET['id'];
$regOptions['country_id']=$idC;

echo json_encode(Array("idCon"=>$idC));
?>