<?php

include get_parent_theme_file_path( '/traders/vendor/autoload.php' );

$api = new \Binance\API("5EfGtW6SJflYpuiMeCR5QNCMteC2MquEOPD22Yqt89l59wL9fW1xA3GjgCvv9gqi","pf7HKOC40Cpj7c6dFX0vxq7V8tl3f7L3C9AVvbud3GPuPcqm5OtCsBjfFhi38hTh");

register_activation_hook(__FILE__, 'aggregator_activation');

function aggregator_activation() {
	if (! wp_next_scheduled ( 'aggregator_event' )) {
		wp_schedule_event(time(), 'daily', 'aggregator_event');
	}
}

add_action('aggregator_event', 'aggregator_wss');

function aggregator_wss() {
	$exchangeInfo = $api->exchangeInfo();
	if(is_array($exchangeInfo)) {

		$symbols = array();
		foreach ($exchangeInfo["symbols"] as $index=>$symbol){
			array_push($symbols, $symbol["symbol"]);
		}

		$api->chart( $symbols, "1m", function ( $api, $symbol, $chart ) {
			global $wpdb;
			if ( $wpdb ) {
				$wpdb->insert( "wss_charts", array(
					"trader" => "Binance",
					"symbol" => $symbol,
					"data"   => json_encode( $chart )
				) );
			}
		} );

		$api->trades( $symbols, function ( $api, $symbol, $trades ) {
			global $wpdb;
			if ( $wpdb ) {
				$wpdb->insert( "wss_trades", array(
					"trader" => "Binance",
					"symbol" => $symbol,
					"data"   => json_encode( $trades )
				) );
			}
		} );
	}
}

//apitraders
//GpQrz333s8UfGShn

//CREATE USER 'apitraders'@'%' IDENTIFIED BY '***';GRANT ALL PRIVILEGES ON *.* TO 'apitraders'@'%' IDENTIFIED BY '***' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `apitraders`.* TO 'apitraders'@'%';