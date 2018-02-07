<?php

include_once get_parent_theme_file_path('/traders/bittrex-api.php');

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getmarkets', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getmarkets'
    ));
});

function bittrex_getmarkets($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetMarkets();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getcurrencies', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getcurrencies'
    ));
});

function bittrex_getcurrencies($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetCurrencies();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getticker', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getticker'
    ));
});

function bittrex_getticker($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetTicker($parameters['market']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getmarketsummaries', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getmarketsummaries'
    ));
});

function bittrex_getmarketsummaries($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetMarketSummaries();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getmarketsummary', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getmarketsummary'
    ));
});

function bittrex_getmarketsummary($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetMarketSummary($parameters['market']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getorderbook', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getorderbook'
    ));
});

function bittrex_getorderbook($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetOrderBook($parameters['market'],$parameters['type']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getmarkethistory', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getmarkethistory'
    ));
});

function bittrex_getmarkethistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetMarketHistory($parameters['market']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/buylimit', array(
        'methods' => 'GET',
        'callback' => 'bittrex_buylimit'
    ));
});

function bittrex_buylimit($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->BuyLimit($parameters['market'],$parameters['quantity'],$parameters['rate']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/selllimit', array(
        'methods' => 'GET',
        'callback' => 'bittrex_selllimit'
    ));
});

function bittrex_selllimit($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->SellLimit($parameters['market'],$parameters['quantity'],$parameters['rate']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/cancel', array(
        'methods' => 'GET',
        'callback' => 'bittrex_cancel'
    ));
});

function bittrex_cancel($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->Cancel($parameters['uuid']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getopenorders', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getopenorders'
    ));
});

function bittrex_getopenorders($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetOpenOrders($parameters['market']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getbalances', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getbalances'
    ));
});

function bittrex_getbalances($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetBalances();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getbalance', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getbalance'
    ));
});

function bittrex_getbalance($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetBalance($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getdepositaddress', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getdepositaddress'
    ));
});

function bittrex_getdepositaddress($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetDepositAddress($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/withdraw', array(
        'methods' => 'GET',
        'callback' => 'bittrex_withdraw'
    ));
});

function bittrex_withdraw($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->Withdraw($parameters['currency'],$parameters['quantity'],$parameters['address'],$parameters['paymentid']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getorder', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getorder'
    ));
});

function bittrex_getorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetOrder($parameters['uuid']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getorderhistory', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getorderhistory'
    ));
});

function bittrex_getorderhistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetOrder($parameters['market']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getwithdrawalhistory', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getwithdrawalhistory'
    ));
});

function bittrex_getwithdrawalhistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetWithdrawalHistory($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bittrex/v1', '/getdeposithistory', array(
        'methods' => 'GET',
        'callback' => 'bittrex_getdeposithistory'
    ));
});

function bittrex_getdeposithistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $bittrex_api = new Bittrex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bittrex_api->GetDepositHistory($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}