<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="sidebar">
    <?
    $countriesOptions = Array
    (
        'need_all' => 1,
        'count' => 12
    );


    echo showCurl(vkRequest('database.getCountries', $countriesOptions), 'regions.php', 'cid');
    ?>
</div>