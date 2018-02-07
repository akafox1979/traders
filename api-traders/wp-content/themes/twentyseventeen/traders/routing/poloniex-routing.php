<?php
include_once get_parent_theme_file_path('/traders/poloniex-api.php');

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getbalances', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getbalances'
    ));
});

function poloniex_getbalances($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_balances();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getopenorders', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getopenorders'
    ));
});

function poloniex_getopenorders($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_open_orders($parameters['pair']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getmytradehistory', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getmytradehistory'
    ));
});

function poloniex_getmytradehistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_my_trade_history($parameters['pair']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/buy', array(
        'methods' => 'GET',
        'callback' => 'poloniex_buy'
    ));
});

function poloniex_buy($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->buy($parameters['pair'],$parameters['rate'],$parameters['amount']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/sell', array(
        'methods' => 'GET',
        'callback' => 'poloniex_sell'
    ));
});

function poloniex_sell($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->sell($parameters['pair'],$parameters['rate'],$parameters['amount']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/cancelorder', array(
        'methods' => 'GET',
        'callback' => 'poloniex_cancelorder'
    ));
});

function poloniex_cancelorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->cancel_order($parameters['pair'],$parameters['order_number']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/withdraw', array(
        'methods' => 'GET',
        'callback' => 'poloniex_withdraw'
    ));
});

function poloniex_withdraw($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->withdraw($parameters['currency'],$parameters['amount'],$parameters['address']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/gettradehistory', array(
        'methods' => 'GET',
        'callback' => 'poloniex_gettradehistory'
    ));
});

function poloniex_gettradehistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_trade_history($parameters['pair']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getorderbook', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getorderbook'
    ));
});

function poloniex_getorderbook($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_order_book($parameters['pair']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getvolume', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getvolume'
    ));
});

function poloniex_getvolume($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_volume();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/getticker', array(
        'methods' => 'GET',
        'callback' => 'poloniex_getticker'
    ));
});

function poloniex_getticker($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_ticker($parameters['pair']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/gettradingpairs', array(
        'methods' => 'GET',
        'callback' => 'poloniex_gettradingpairs'
    ));
});

function poloniex_gettradingpairs($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_trading_pairs();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('poloniex/v1', '/gettotalbtcbalance', array(
        'methods' => 'GET',
        'callback' => 'poloniex_gettotalbtcbalance'
    ));
});

function poloniex_gettotalbtcbalance($request)
{

    $parameters = $request->get_query_params();
    try {
        $poloniex_api = new Poloniex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $poloniex_api->get_total_btc_balance();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}