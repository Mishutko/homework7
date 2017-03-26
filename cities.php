<?php
include('funcs.php');
$id = $_GET['idC'];
$options['region_id'] = $id;
//$options['country_id'] = 20;
$options['need_all'] = 1;
showCurl(vkRequest('database.getCities', $options));
