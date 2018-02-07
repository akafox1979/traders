<?php

include_once get_parent_theme_file_path('/traders/bitfinex-api.php');

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getbook', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getbook'
    ));
});

function bitfinex_getbook($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_book($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getlendbook', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getlendbook'
    ));
});

function bitfinex_getlendbook($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_lendbook($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getlends', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getlends'
    ));
});

function bitfinex_getlends($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_lends($parameters['currency']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getstats', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getstats'
    ));
});

function bitfinex_getstats($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_stats($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getsymbols', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getsymbols'
    ));
});

function bitfinex_getsymbols($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_symbols();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getsymbolsdetails', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getsymbolsdetails'
    ));
});

function bitfinex_getsymbolsdetails($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_symbols_details();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getticker', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getticker'
    ));
});

function bitfinex_getticker($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_ticker($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/gettrades', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_gettrades'
    ));
});

function bitfinex_gettrades($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_trades($parameters['symbol']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getaccountinfos', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getaccountinfos'
    ));
});

function bitfinex_getaccountinfos($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_account_infos();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getsummary', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getsummary'
    ));
});

function bitfinex_getsummary($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_summary();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/newdeposit', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_newdeposit'
    ));
});

function bitfinex_newdeposit($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->new_deposit($parameters['method'],$parameters['wallet_name'],$parameters['renew']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/neworder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_neworder'
    ));
});

function bitfinex_neworder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->new_order(
            $parameters['symbol'],
            $parameters['amount'],
            $parameters['price'],
            $parameters['exchange'],
            $parameters['side'],
            $parameters['type'],
            $parameters['is_hidden'],
            $parameters['is_postonly'],
            $parameters['ocoorder'],
            $parameters['buy_price_oco']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/newmultiorder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_newmultiorder'
    ));
});

function bitfinex_newmultiorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->new_multi_order(
            $parameters['symbol'],
            $parameters['amount'],
            $parameters['price'],
            $parameters['exchange'],
            $parameters['side'],
            $parameters['type']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/cancelorder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_cancelorder'
    ));
});

function bitfinex_cancelorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->cancel_order( $parameters['order_id'] );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/cancelmultiorder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_cancelmultiorder'
    ));
});

function bitfinex_cancelmultiorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->cancel_multi_orders( $parameters['order_id'] );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/cancelallorders', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_cancelallorders'
    ));
});

function bitfinex_cancelallorders($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->cancel_all_orders();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/replaceorder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_replaceorder'
    ));
});

function bitfinex_replaceorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->replace_order(
            $parameters['order_id'],
            $parameters['symbol'],
            $parameters['amount'],
            $parameters['price'],
            $parameters['exchange'],
            $parameters['side'],
            $parameters['type'],
            $parameters['is_hidden'],
            $parameters['use_remaining']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getorder', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getorder'
    ));
});

function bitfinex_getorder($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_order($parameters['order_id']);
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getorders', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getorders'
    ));
});

function bitfinex_getorders($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_orders();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getpositions', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getpositions'
    ));
});

function bitfinex_getpositions($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_positions();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/claimposition', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_claimposition'
    ));
});

function bitfinex_claimposition($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->claim_position(
            $parameters['position_id'],
            $parameters['amount']

        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/gethistory', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_gethistory'
    ));
});

function bitfinex_gethistory($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_history(
            $parameters['currency'],
            $parameters['wallet'],
            $parameters['limit'],
            $parameters['since'],
            $parameters['until']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/gethistorymovements', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_gethistorymovements'
    ));
});

function bitfinex_gethistorymovements($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_history_movements(
            $parameters['currency'],
            $parameters['method'],
            $parameters['limit'],
            $parameters['since'],
            $parameters['until']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getmytrades', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getmytrades'
    ));
});

function bitfinex_getmytrades($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_my_trades(
            $parameters['symbol'],
            $parameters['limit_trades'],
            $parameters['reverse'],
            $parameters['timestamp'],
            $parameters['until']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/newoffer', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_newoffer'
    ));
});

function bitfinex_newoffer($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->new_offer(
            $parameters['currency'],
            $parameters['amount'],
            $parameters['rate'],
            $parameters['period'],
            $parameters['direction']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/canceloffer', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_canceloffer'
    ));
});

function bitfinex_canceloffer($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->cancel_offer( $parameters['offer_id'] );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getoffer', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getoffer'
    ));
});

function bitfinex_getoffer($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_offer( $parameters['offer_id'] );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getcredits', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getcredits'
    ));
});

function bitfinex_getcredits($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_credits();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getoffers', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getoffers'
    ));
});

function bitfinex_getoffers($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_offers();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/gettakenfunds', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_gettakenfunds'
    ));
});

function bitfinex_gettakenfunds($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_taken_funds();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getunusedtakenfunds', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getunusedtakenfunds'
    ));
});

function bitfinex_getunusedtakenfunds($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_unused_taken_funds();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/gettotaltakenfunds', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_gettotaltakenfunds'
    ));
});

function bitfinex_gettotaltakenfunds($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_total_taken_funds();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/closefunding', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_closefunding'
    ));
});

function bitfinex_closefunding($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->closefunding( $parameters['swap_id'] );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getbalances', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getbalances'
    ));
});

function bitfinex_getbalances($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_balances();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getmargininfos', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getmargininfos'
    ));
});

function bitfinex_getmargininfos($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_margin_infos();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/transfer', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_transfer'
    ));
});

function bitfinex_transfer($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->transfer(
            $parameters['currency'],
            $parameters['amount'],
            $parameters['walletfrom'],
            $parameters['walletto']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/withdraw', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_withdraw'
    ));
});

function bitfinex_withdraw($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->withdraw(
            $parameters['withdraw_type'],
            $parameters['walletselected'],
            $parameters['amount'],
            $parameters['address'],
            $parameters['expressWire']
        );
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}

add_action('rest_api_init', function () {
    register_rest_route('bitfinex/v1', '/getkeyinfo', array(
        'methods' => 'GET',
        'callback' => 'bitfinex_getkeyinfo'
    ));
});

function bitfinex_getkeyinfo($request)
{

    $parameters = $request->get_query_params();
    try {
        $bitfinex_api = new Bitfinex\API($parameters['api_key'], $parameters['api_secret']);

        $return_value = $bitfinex_api->get_key_info();
    } catch (Exception $ex) {
        $return_value = array("error" => $ex->getMessage());
    }
    return $return_value;

}
