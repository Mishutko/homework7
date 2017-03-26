<?php

$token = '317783b2317783b2316849c006312d43b433177317783b269a0f5251a7fe078d6d5d905';

function vkRequest($method, $options = Array(), $token = '')
{
    $params = http_build_query($options);
    $url = 'https://api.vk.com/method/' . $method . '?' . $params . '&access_token=' . $token.'&v=5.52';

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Запрещаем вывод в браузер
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true); // Убираем проверку SSL
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Убираем SSL проверку хоста
    curl_setopt($curl, CURLOPT_URL, $url); // Устанавливаем URL для запроса

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

function showCurl($jsonReq)
{
    $jsonReq = json_decode($jsonReq, 1);
    $jsonReqArr = $jsonReq['response']['items'];

    var_dump($jsonReq);return;
    echo '<ol id="myLinks">';

    foreach ($jsonReqArr as $item)
    {

        echo '<li><a href="'.$mypath.'?idC='.$item['id'].'">'.$item['title'].'</a></li>';
    }
    echo '</ol>';
}




