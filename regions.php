<?php
include('funcs.php');
$id = $_GET['idC'];

$regionsOptions['country_id'] = $id;
showCurl(vkRequest('database.getRegions', $regionsOptions), 'cities.php', 'region_id');


