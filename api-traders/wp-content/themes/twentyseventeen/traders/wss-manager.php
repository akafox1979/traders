<?php

include get_parent_theme_file_path( '/traders/vendor/autoload.php' );

use \Binance;

$api = new Binance\API("5EfGtW6SJflYpuiMeCR5QNCMteC2MquEOPD22Yqt89l59wL9fW1xA3GjgCvv9gqi","pf7HKOC40Cpj7c6dFX0vxq7V8tl3f7L3C9AVvbud3GPuPcqm5OtCsBjfFhi38hTh");

$api->chart(["BNBBTC"], "1m", function($api, $symbol, $chart) {
    error_log("{$symbol} chart update\n");
    error_log(json_encode($chart));
});

$api->trades(["BNBBTC"], function($api, $symbol, $trades) {
    error_log("{$symbol} trades update\n");
    error_log(json_encode($trades));
});