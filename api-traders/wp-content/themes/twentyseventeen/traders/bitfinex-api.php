<?php 

namespace Bitfinex;

class API {
    const CONNECT_TIMEOUT = 60;
    const API_URL = 'https://api.bitfinex.com';

    private $api_key = '';
    private $api_secret = '';
    private $api_version = '';

    public function __construct($api_key, $api_secret, $api_version = 'v1') {
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
        $this->api_version = $api_version;
    }

    public function get_book($symbol = 'BTCUSD', $data = array()) {
    	$request = $this->endpoint('book', $symbol);
    	
    	return $this->send_public_request($request, $data);
    }

    public function get_lendbook($currency = 'USD', $data = array()) {
    	$request = $this->endpoint('lendbook', $currency);
    	
    	return $this->send_public_request($request, $data);
    }	

    public function get_lends($currency = 'USD', $data = array()) {
    	$request = $this->endpoint('lends', $currency);
    	
    	return $this->send_public_request($request, $data);
    }

    public function get_stats($symbol = 'BTCUSD') {
    	$request = $this->endpoint('stats', $symbol);
    	
    	return $this->send_public_request($request);
    }

    public function get_symbols() {
    	$request = $this->endpoint('symbols');
    	
    	return $this->send_public_request($request);
    }

    public function get_symbols_details() {
    	$request = $this->endpoint('symbols_details');
    	
    	return $this->send_public_request($request);
    }

    public function get_ticker($symbol = 'BTCUSD') {
    	$request = $this->endpoint('pubticker', $symbol);
    	
    	return $this->send_public_request($request);
    }

    public function get_trades($symbol = 'BTCUSD', $data = array()) {
    	$request = $this->endpoint('trades', $symbol);
    	
    	return $this->send_public_request($request, $data);
    }

    public function get_account_infos() {
    	$request = $this->endpoint('account_infos');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_summary() {
    	$request = $this->endpoint('summary');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

		public function new_deposit($method, $wallet_name, $renew = 0) {
    	$request = $this->endpoint('deposit', 'new');
    	
    	$data = array(
            'request'       => $request,
            'method'        => $method,
            'wallet_name'   => $wallet_name,
            'renew'         => $renew
    	);

    	return $this->send_auth_request($data);
    }

		public function new_order($symbol, $amount, $price, $exchange, $side, $type, $is_hidden = FALSE, $is_postonly = FALSE, $ocoorder = FALSE, $buy_price_oco = NULL) {
    	$request = $this->endpoint('order', 'new');

    	$data = array(
            'request'       => $request,
            'symbol'        => $symbol,
            'amount'        => $amount,
            'price'         => $price,
            'exchange'      => $exchange,
            'side'          => $side,
            'type'          => $type,
            'is_hidden'     => $is_hidden,
            'is_postonly'   => $is_postonly,
            'ocoorder'      => $ocoorder
    	);
    	
        if ($ocoorder) {
            $data['buy_price_oco'] = $buy_price_oco;
        }

    	return $this->send_auth_request($data);
    }


    public function new_multi_order($symbol, $amount, $price, $exchange, $side, $type) {
    	$request = $this->endpoint('order', 'new/multi');
    	
    	$data = array(
            'request'   => $request,
            'symbol'    => $symbol,
            'amount'    => $amount,
            'price'     => $price,
            'exchange'  => $exchange,
            'side'      => $side,
            'type'      => $type
    	);

    	return $this->send_auth_request($data);
    }

    public function cancel_order($order_id) {
    	$request = $this->endpoint('order', 'cancel');

    	$data = array(
            'request'   => $request,
            'order_id'  => $order_id
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function cancel_multi_orders($order_ids) {
    	$request = $this->endpoint('order', 'cancel/multi');
    	
    	$data = array(
            'request'   => $request,
            'order_ids' => $order_ids
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function cancel_all_orders() {
    	$request = $this->endpoint('order', 'cancel/all');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function replace_order($order_id, $symbol, $amount, $price, $exchange, $side, $type, $is_hidden = FALSE, $use_remaining = FALSE) {
    	$request = $this->endpoint('order', 'cancel/replace');
    	
    	$data = array(
            'request'       => $request,
            'order_id'      => $order_id,
            'symbol'        => $symbol,
            'amount'        => $amount,
            'price'         => $price,
            'exchange'      => $exchange,
            'side'          => $side,
            'type'          => $type,
            'is_hidden'     => $is_hidden,
            'use_remaining' => $use_remaining
    	);

    	return $this->send_auth_request($data);
    }

    public function get_order($order_id) {
    	$request = $this->endpoint('order', 'status');
    	
    	$data = array(
            'request'   => $request,
            'order_id'  => $order_id
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_orders() {
    	$request = $this->endpoint('orders');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_positions() {
    	$request = $this->endpoint('positions');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function claim_position($position_id, $amount) {
    	$request = $this->endpoint('position', 'claim');
    	
    	$data = array(
            'request'       => $request,
            'position_id'   => $position_id,
            'amount'        => $amount
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_history($currency, $wallet, $limit = 500, $since = NULL, $until = NULL) {
    	$request = $this->endpoint('history');
    	
    	$data = array(
            'request'   => $request,
            'currency'  => $currency,
            'wallet'    => $wallet,
            'limit'     => $limit
    	);
    	
    	if ($since) {
            $data['since'] = $since;
    	}
    	
    	if ($until) {
            $data['until'] = $until;
    	}
    		
    	return $this->send_auth_request($data);
    }

    public function get_history_movements($currency = 'USD', $method = 'bitcoin', $limit = 500, $since = NULL, $until = NULL) {
    	$request = $this->endpoint('history', 'movements');
    	
    	$data = array(
            'request'   => $request,
            'currency'  => $currency,
            'method'    => $method,
            'limit'     => $limit
    	);
    	
    	if ($since) {
    		$data['since'] = $since;
    	}
    	
    	if ($until) {
    		$data['until'] = $until;
    	}
    		
    	return $this->send_auth_request($data);
    }

    public function get_my_trades($symbol = 'BTCUSD', $limit_trades = 50, $timestamp = NULL, $until = NULL, $reverse = 0) {
    	$request = $this->endpoint('mytrades');

    	$data = array(
            'request'       => $request,
            'symbol'        => $symbol,
            'limit_trades'  => $limit_trades,
            'reverse'       => $reverse
    	);
        
        if ($timestamp) {
            $data['timestamp'] = $timestamp;
    	}

    	if ($until) {
    		$data['until'] = $until;
    	}

    	return $this->send_auth_request($data);
    }

    public function new_offer($currency = 'BTC', $amount, $rate, $period, $direction = 'lend') {
    	$request = $this->endpoint('offer', 'new');
    	
    	$data = array(
            'request'   => $request,
            'currency'  => $currency,
            'amount'    => $amount,
            'rate'      => $rate,
            'period'    => $period,
            'direction' => $direction
    	);

    	return $this->send_auth_request($data);
    }

    public function cancel_offer($offer_id) {
    	$request = $this->endpoint('offer', 'cancel');
    	
    	$data = array(
            'request'   => $request,
            'offer_id'  => $offer_id
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_offer($offer_id) {
    	$request = $this->endpoint('offer', 'status');
    	
    	$data = array(
            'request'   => $request,
            'offer_id'  => $offer_id
    	);
    	
    	return $this->send_auth_request($data);
    }

		public function get_credits() {
    	$request = $this->endpoint('credits');

    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_offers() {
    	$request = $this->endpoint('offers');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_taken_funds() {
    	$request = $this->endpoint('taken_funds');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_unused_taken_funds() {
    	$request = $this->endpoint('unused_taken_funds');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_total_taken_funds() {
    	$request = $this->endpoint('total_taken_funds');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function close_funding($swap_id) {
    	$request = $this->endpoint('funding', 'close');
    	
    	$data = array(
            'request' => $request,
            'swap_id' => $swap_id
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_balances() {
    	$request = $this->endpoint('balances');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function get_margin_infos() {
    	$request = $this->endpoint('margin_infos');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    public function transfer($currency, $amount, $walletfrom, $walletto) {
    	$request = $this->endpoint('transfer');

    	$data = array(
            'request'       => $request,
            'currency'      => $currency,
            'amount'        => $amount,
            'walletfrom'    => $walletfrom,
            'walletto'      => $walletto
    	);

    	return $this->send_auth_request($data);
    }

    public function withdraw($withdraw_type, $walletselected, $amount, $address = '', $expressWire = 0, $bank_data = array()) {
    	$request = $this->endpoint('withdraw');
    	
    	$data = array(
            'request'           => $request,
            'withdraw_type'     => $withdraw_type,
            'walletselected'    => $walletselected,
            'amount'            => $amount
    	);
    	
    	switch ($withdraw_type) {
            case 'bitcoin':
            case 'litecoin':
            case 'ethereum':
            case 'tether':
                $data['address'] = $address;

                break;
            case 'wire':
                $data['expressWire'] = $expressWire;

                $data['account_name']   = $bank_data['account_name'];
                $data['account_number'] = $bank_data['account_number'];
                $data['bank_name']      = $bank_data['bank_name'];
                $data['bank_address']   = $bank_data['bank_address'];
                $data['bank_city']      = $bank_data['bank_city'];
                $data['bank_country']   = $bank_data['bank_country'];
                $data['detail_payment'] = array_key_exists('detail_payment', $bank_data) ? $bank_data['detail_payment'] : '';

                $data['intermediary_bank_name']     = array_key_exists('im_bank_name', $bank_data) ? $bank_data['im_bank_name'] : '';
                $data['intermediary_bank_address']  = array_key_exists('im_bank_address', $bank_data) ? $bank_data['im_bank_address'] : '';
                $data['intermediary_bank_city']     = array_key_exists('im_bank_city', $bank_data) ? $bank_data['im_bank_city'] : '';
                $data['intermediary_bank_country']  = array_key_exists('im_bank_country', $bank_data) ? $bank_data['im_bank_country'] : '';
                $data['intermediary_bank_account']  = array_key_exists('im_bank_account', $bank_data) ? $bank_data['im_bank_account'] : '';
                $data['intermediary_bank_swift']    = array_key_exists('im_bank_swift', $bank_data) ? $bank_data['im_bank_swift'] : '';

                break;
    	}

    	return $this->send_auth_request($data);
    }

    public function get_key_info() {
    	$request = $this->endpoint('key_info');
    	
    	$data = array(
            'request' => $request
    	);
    	
    	return $this->send_auth_request($data);
    }

    private function endpoint($method, $params = NULL) {
    	$parameters = '';
    	
    	if ($params !== NULL) {
            $parameters = '/';

            if (is_array($params)) {
                $parameters .= implode('/', $params);
            } else {
                $parameters .= $params;
            }
    	}
    	
    	return "/{$this->api_version}/$method$parameters";
    }

    private function prepare_header($data)
    {
    	$data['nonce'] = (string) number_format(round(microtime(true) * 100000), 0, '.', '');
    	
    	$payload = base64_encode(json_encode($data));
    	$signature = hash_hmac('sha384', $payload, $this->api_secret);
    	
    	return array(
            'X-BFX-APIKEY: ' . $this->api_key,
            'X-BFX-PAYLOAD: ' . $payload,
            'X-BFX-SIGNATURE: ' . $signature
    	);
    }

    private function curl_error($ch) {
    	if ($errno = curl_errno($ch)) {
            $error_message = curl_strerror($errno);
            echo "cURL error ({$errno}):\n {$error_message}";

            return FALSE;
    	}
    	
    	return TRUE;
    }

    private function is_bitfinex_error($ch) {
    	$http_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    	
    	if ($http_code !== 200) {
            return TRUE;
    	}
    	
    	return FALSE;
    }

    private function output($result, $is_error = FALSE) {
    	$out_array = json_decode($result, TRUE);
    	
    	if ($is_error) {
            $out_array['error'] = TRUE;
    	}
    	
    	return $out_array;
    }

    private function send_auth_request($data) {
    	$ch = curl_init();
    	$url = self::API_URL . $data['request'];
    	
    	$headers = $this->prepare_header($data);
    	
    	curl_setopt_array($ch, array(
            CURLOPT_URL             => $url,
            CURLOPT_POST            => TRUE,
            CURLOPT_RETURNTRANSFER  => TRUE,
            CURLOPT_HTTPHEADER      => $headers,
            CURLOPT_SSL_VERIFYPEER  => TRUE,
            CURLOPT_CONNECTTIMEOUT  => self::CONNECT_TIMEOUT, 
            CURLOPT_POSTFIELDS      => ''
    	));
    	
    	if( !$result = curl_exec($ch) )
    	{
            return $this->curl_error($ch);
    	} 
    	else
    	{
            return $this->output($result, $this->is_bitfinex_error($ch));
    	}
    }

    private function send_public_request($request, $params = NULL) {
    	$ch = curl_init();
    	$query = '';
    	
    	if (count($params)) {
            $query = '?' . http_build_query($params);
    	}
    	
    	$url = self::API_URL . $request . $query;
    	
    	curl_setopt_array($ch, array(
            CURLOPT_URL             => $url,
            CURLOPT_RETURNTRANSFER  => TRUE,
            CURLOPT_SSL_VERIFYPEER  => TRUE,
            CURLOPT_CONNECTTIMEOUT  => self::CONNECT_TIMEOUT,
    	));
    	
    	if( !$result = curl_exec($ch) )
    	{
            return $this->curl_error($ch);
    	} 
    	else
    	{			
            return $this->output($result, $this->is_bitfinex_error($ch));
    	}
    }
}

?>
