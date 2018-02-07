<?php

include_once get_parent_theme_file_path('/traders/binance-api.php');

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/time', array(
        'methods' => 'GET',
        'callback' => 'binance_time'
    ));
});

function binance_time($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $binance_api->time();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/exchangeinfo', array(
        'methods' => 'GET',
        'callback' => 'binance_exchangeinfo'
    ));
});

function binance_exchangeinfo($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->exchangeInfo();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/prices', array(
        'methods' => 'GET',
        'callback' => 'binance_prices',
    ));
});


function binance_prices($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->prices();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/buy', array(
        'methods' => 'GET',
        'callback' => 'binance_buy',
    ));
});


function binance_buy($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->buy($parameters['symbol'], $parameters['quantity'], $parameters['price'], $parameters['type']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/sell', array(
        'methods' => 'GET',
        'callback' => 'binance_sell',
    ));
});


function binance_sell($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->sell($parameters['symbol'], $parameters['quantity'], $parameters['price'], $parameters['type']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/marketbuy', array(
        'methods' => 'GET',
        'callback' => 'binance_marketbuy',
    ));
});


function binance_marketbuy($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->marketbuy($parameters['symbol'], $parameters['quantity']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/marketsell', array(
        'methods' => 'GET',
        'callback' => 'binance_marketsell',
    ));
});


function binance_marketsell($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->marketsell($parameters['symbol'], $parameters['quantity']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/cancel', array(
        'methods' => 'GET',
        'callback' => 'binance_cancel',
    ));
});


function binance_cancel($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->cancel($parameters['symbol'], $parameters['orderid']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/orderstatus', array(
        'methods' => 'GET',
        'callback' => 'binance_orderstatus',
    ));
});


function binance_orderstatus($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->orderStatus($parameters['symbol'], $parameters['orderid']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/openorders', array(
        'methods' => 'GET',
        'callback' => 'binance_openorders',
    ));
});


function binance_openorders($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->openOrders($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/orders', array(
        'methods' => 'GET',
        'callback' => 'binance_orders',
    ));
});


function binance_orders($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->orders($parameters['symbol'], $parameters['limit']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/history', array(
        'methods' => 'GET',
        'callback' => 'binance_history',
    ));
});


function binance_history($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->history($parameters['symbol'], $parameters['limit']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/withdraw', array(
        'methods' => 'GET',
        'callback' => 'binance_withdraw',
    ));
});


function binance_withdraw($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->withdraw($parameters['asset'], $parameters['address'], $parameters['amount'], $parameters['addressTag'], $parameters['memo'], $parameters['name']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/depositaddress', array(
        'methods' => 'GET',
        'callback' => 'binance_depositaddress',
    ));
});


function binance_depositaddress($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->depositAddress($parameters['asset']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/deposithistory', array(
        'methods' => 'GET',
        'callback' => 'binance_deposithistory',
    ));
});


function binance_deposithistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->depositHistory($parameters['asset']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/withdrawhistory', array(
        'methods' => 'GET',
        'callback' => 'binance_withdrawhistory',
    ));
});


function binance_withdrawhistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->withdrawHistory($parameters['asset']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}


add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/bookprices', array(
        'methods' => 'GET',
        'callback' => 'binance_bookprices',
    ));
});


function binance_bookprices($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->bookPrices();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/account', array(
        'methods' => 'GET',
        'callback' => 'binance_account',
    ));
});


function binance_account($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->account();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/prevday', array(
        'methods' => 'GET',
        'callback' => 'binance_prevday',
    ));
});


function binance_prevday($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->prevDay($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/aggtrades', array(
        'methods' => 'GET',
        'callback' => 'binance_aggtrades',
    ));
});


function binance_aggtrades($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->aggTrades($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('binance/v1', '/depth', array(
        'methods' => 'GET',
        'callback' => 'binance_depth',
    ));
});


function binance_depth($request)
{

    $parameters = $request->get_query_params();
    try {
        $binance_api = new Binance\API($parameters['api_key'], $parameters['api_secret']);
        $return_value = $binance_api->depth($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}