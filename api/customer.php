<?php
session_start();
$mortgageloanStepsRefi = [
	'mortgage_lead_type_field_group'=>'hide', // both
	'property_desc_field_group'=>'hide', // both
	'credit_rating_field_group'=>'hide', // both 
	'estimate_value_field_group'=>'show', // both
	'first_balance_field_group'=>'show', // refi
	'first_interest_rate_field_group'=>'show', // refi
	//'down_payment_field_group'=>'show', // for new home only
	'rate_type_field_group'=>'hide',	// both (fixed, adustable, both)
	'second_balance_field_group'=>'hide', // refi
	'additional_cash_field_group'=>'show', // refi
	'bankruptcy_field_group'=>'hide', //both
	'employment_type_field_group'=>'hide', // both
	'num_mortgage_lates_field_group'=>'hide', // both
	'va_loan_field_group'=>'hide', // both
	//'need_a_project_field_group'=>'hide',
	'ltv_percentage_field_group'=>'show', // both
	//'agent_found_field_group'=>'hide', // both
	//'bank_name_field_group'=>'show',
	'loan_amount_field_group'=>'show', // refi
	'postal_address_field_group'=>'show', // both
	'personal_info_field_group'=>'show', // both
	'thank_you_block'=>'hide' // both
];
$mortgageloanStepsNewHome = [
	'mortgage_lead_type_field_group'=>'hide', // both
	'property_desc_field_group'=>'hide', // both
	'credit_rating_field_group'=>'hide', // both 
	'spec_home_field_group'=>'hide',  // for new home only
	'buy_timeframe_field_group'=>'hide', // for new home only
	'property_use_field_group'=>'hide',  // for new home only
	'estimate_value_field_group'=>'show', // for new home only
	'down_payment_field_group'=>'show', // both
	'rate_type_field_group'=>'hide',	// both (fixed, adustable, both)
	'bankruptcy_field_group'=>'hide', //both
	'employment_type_field_group'=>'hide', // both
	'num_mortgage_lates_field_group'=>'hide', // both
	'va_loan_field_group'=>'hide', // both
	//'need_a_project_field_group'=>'hide',
	'ltv_percentage_field_group'=>'show', // both
	'agent_found_field_group'=>'hide', // both
	//'bank_name_field_group'=>'show',
	'postal_address_field_group'=>'show', // both
	'personal_info_field_group'=>'show', // both
	'thank_you_block'=>'hide' // both
];
$mortgageloanStepsSellHome = [
	'mortgage_lead_type_field_group'=>'hide', // both
	'property_desc_field_group'=>'hide', // both
	'credit_rating_field_group'=>'hide', // both 
	//'spec_home_field_group'=>'hide',  // for new home only
	'sell_timeframe_field_group'=>'hide', // for new home only
	'reason_field_group'=>'hide', // both
	'occupancy_field_group' =>'hide', // both
	'behind_mortgage_payments_field_group'=>'hide', // both
	//'property_use_field_group'=>'hide',  // for new home only
	'estimate_value_field_group'=>'show', // for new home only
	//'down_payment_field_group'=>'show', // both
	//'rate_type_field_group'=>'hide',	// both (fixed, adustable, both)
	'bankruptcy_field_group'=>'hide', //both
	'employment_type_field_group'=>'hide', // both
	'num_mortgage_lates_field_group'=>'hide', // both
	'va_loan_field_group'=>'hide', // both
	'ltv_percentage_field_group'=>'show', // both
	'agent_found_field_group'=>'hide', // both
	'postal_address_field_group'=>'show', // both
	'personal_info_field_group'=>'show', // both
	'thank_you_sell_home_block'=>'hide' // both
];
$action = isset($_GET['action']) ? $_GET['action'] : '';
$tab = isset($_GET['tab']) ? $_GET['tab'] : '';
if($tab == 'mortgage_lead_type_field_group'){
	if(isset($_GET['tab_value'])){
		if($_GET['tab_value'] == '1'){
			$_SESSION['lead_type'] ='NewHome';
		}else if($_GET['tab_value'] == '2'){
			$_SESSION['lead_type'] ='Refi';	
		}else if($_GET['tab_value'] == '5'){
			$_SESSION['lead_type'] ='SellHome';
		}
	}
}
$mortgageloanSteps = [];
if(isset($_SESSION['lead_type']) && $_SESSION['lead_type'] == 'Refi'){
	$mortgageloanSteps = $mortgageloanStepsRefi;
	$_SESSION['buyorrefinance'] ='you want to refinance';
}else if(isset($_SESSION['lead_type']) && $_SESSION['lead_type'] == 'NewHome'){
	$mortgageloanSteps = $mortgageloanStepsNewHome;
	$_SESSION['buyorrefinance'] ='you want to buy';
}else if(isset($_SESSION['lead_type']) && $_SESSION['lead_type'] == 'SellHome'){
	$mortgageloanSteps = $mortgageloanStepsSellHome;
	$_SESSION['buyorrefinance'] ='you want to sell';
}

if($action == 'sellhome_submit'){
	$_SESSION['lead_type'] = 'SellHome';
	$_SESSION['buyorrefinance'] = 'you want to sell';

	foreach ($_REQUEST as $k => $val) {
		if (is_array($val)) {
			$_SESSION[$k] = $val;
		} else {
			$_SESSION[$k] = str_replace(array('$', ','), '', $val);
		}
	}

	$promo_code = isset($_REQUEST['promo_code']) ? $_REQUEST['promo_code'] : '';
	$mortgage_lead_type = isset($_REQUEST['mortgage_lead_type']) ? $_REQUEST['mortgage_lead_type'] : '';
	$sub_id = isset($_REQUEST['sub_id']) ? $_REQUEST['sub_id'] : '';
	$subid = isset($_REQUEST['subid']) ? $_REQUEST['subid'] : '';
	$sub_id = !empty($sub_id) ? $sub_id : $subid;
	$sub_id2 = isset($_REQUEST['sub_id2']) ? $_REQUEST['sub_id2'] : '';
	$subid2 = isset($_REQUEST['subid2']) ? $_REQUEST['subid2'] : '';
	$sub_id2 = !empty($sub_id2) ? $sub_id2 : $subid2;

	$_SESSION['promo_code'] = $promo_code;
	$_SESSION['mortgage_lead_type'] = $mortgage_lead_type;
	$_SESSION['sub_id'] = $sub_id;
	$_SESSION['sub_id2'] = $sub_id2;
	$_SESSION['universal_leadid'] = isset($_REQUEST['universal_leadid']) ? $_REQUEST['universal_leadid'] : '';
	$_SESSION['trustedformcerturl'] = isset($_REQUEST['xxTrustedFormCertUrl']) ? $_REQUEST['xxTrustedFormCertUrl'] : '';

	$url = 'https://www.elitebizpanel.com/mortgage/affiliates/getaffstatus';
	$pixel = @file_get_contents($url.'?promo_code='.$promo_code.'&sub_id='.$sub_id.'&sub_id2='.$sub_id2);
	if(!empty($pixel)){
		// Affiliate pixel fired; response is handled server-side for this full-form flow.
	}
	if (isset($_REQUEST['chk_arcamax']) && $_REQUEST['chk_arcamax'] == 'Y') {
		$url = 'https://elitecashwire.com/arcamax.php';
		$fields = [
			'email' => isset($_SESSION['email']) ? $_SESSION['email'] : '',
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'scextcode' => $promo_code,
			'campign_code' => '8760',
		];
		$request = http_build_query($fields);
		@file_get_contents($url.'?'.$request);
	}

	$data = $_SESSION;
	$zip = isset($data['zip']) ? $data['zip'] : '';
	$response = @file_get_contents('https://elitecashwire.com/get_city_state_from_zip.php?zip='.$zip);
	$citystate = json_decode($response);
	$estimate_value = isset($data['estimate_value']) ? $data['estimate_value'] : '';
	$tcpa_text = 'By checking this box, I affirm that I have read, understand, and agree to the Terms of Use Agreement and Privacy Policy, I authorize EliteMortgageFinder.com and its Marketing Partners to obtain my consumer report, credit profile, or other credit information associated with me from any consumer reporting agency for purposes of my inquiry. Consent is not required as a condition of purchasing any services or products. I provide my express written consent to EliteMortgageFinder.com and up to five (5) Marketing Partners to contact me via telephone calls, text messages, and/or email including for marketing purposes.';

	$data['ipaddress'] = $_SERVER['REMOTE_ADDR'];
	$data['user_agent'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$data['url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'www.elitemortgagefinder.com') . '/sellhome.php';
	$data['lead_mode'] = 1;
	$data['promo_code'] = $_SESSION['promo_code'];
	$data['sub_id'] = $_SESSION['sub_id'];
	$data['universal_leadid'] = $_SESSION['universal_leadid'];
	$data['trustedformcerturl'] = $_SESSION['trustedformcerturl'];
	$data['tcpa_optin'] = 1;
	$data['tcpa_text'] = substr($tcpa_text, 0, 200);
	$data['property_zip'] = $zip;
	$data['property_state'] = (!empty($citystate) && !empty($citystate->state)) ? $citystate->state : 'NY';
	$data['state'] = (!empty($citystate) && !empty($citystate->state)) ? $citystate->state : 'NY';
	$data['datetime_stamp'] = date('Y-m-d H:i:s');
	$data['mortgage_lead_type'] = 5;
	$data['estimate_value'] = $estimate_value;
	$data['property_value'] = $estimate_value;
	$data['loan_amount'] = $estimate_value !== '' ? $estimate_value : 85000;
	$data['employment_type'] = isset($data['employment_type']) ? $data['employment_type'] : '';
	$data['income'] = isset($data['income']) ? preg_replace('/[^0-9]/', '', $data['income']) : '';
	if (isset($data['phone'])) {
		$data['phone'] = preg_replace('/[^0-9]/', '', $data['phone']);
	}
	if (isset($data['dob']) && $data['dob'] !== '') {
		$dob_ts = strtotime(str_replace('-', '/', $data['dob']));
		if ($dob_ts) {
			$data['dob'] = date('Y-m-d', $dob_ts);
		}
	}

	$request = http_build_query($data);
	$url = 'https://elitebizpanel.com/mortgage/postprocess';
	$result = curlposting($url, $request);
	header('Content-Type: application/json');
	echo json_encode([
		'success' => 'success',
		'message' => 'Thank you. Your sell-home request was submitted.',
		'result' => $result
	]);
	exit;
}

if($action  == 'backbutton'){
	$curKey = array_search($tab,array_keys($mortgageloanSteps));
	$prev_key_name = array_keys($mortgageloanSteps)[$curKey-1];
	$cur_key_name = array_keys($mortgageloanSteps)[$curKey];
	$json['hidebuttons'] = $mortgageloanSteps[$prev_key_name];
	$json['prevstep'] = $prev_key_name;
	$json['curstep'] = $cur_key_name;
	$json['buyorrefinance'] = $_SESSION['buyorrefinance'];
	echo json_encode($json);
}else if($action == 'process'){
	$curKey = array_search($tab,array_keys($mortgageloanSteps));
	$field_name = str_replace('_field_group','',array_keys($mortgageloanSteps)[$curKey]);
	$field_value = str_replace(array('$',','),'',$_GET['tab_value']);
	if($field_name !=='undefined'){
		$_SESSION[$field_name] = $field_value;
	}
	if($_REQUEST){
		foreach ($_REQUEST as $k => $val) {
			$_SESSION[$k] = str_replace(array('$',','),'',$val);
		}
	}
	$_SESSION['promo_code'] = $_REQUEST['promo_code'];
	$sub_id = isset($_REQUEST['sub_id'])?$_REQUEST['sub_id']:'';
	$subid = isset($_REQUEST['subid'])?$_REQUEST['subid']:'';
	$sub_id = !empty($sub_id) ? $sub_id : $subid;
	$sub_id2 = isset($_REQUEST['sub_id2'])?$_REQUEST['sub_id2']:'';
	$subid2 = isset($_REQUEST['subid2'])?$_REQUEST['subid2']:'';
	$sub_id2 = !empty($sub_id2) ? $sub_id2 : $subid2;
	$_SESSION['sub_id'] = $sub_id;
	$_SESSION['sub_id2'] = $sub_id2;
	$_SESSION['universal_leadid'] = $_REQUEST['universal_leadid'];
	$_SESSION['trustedformcerturl'] = $_REQUEST['xxTrustedFormCertUrl'];
	$json['set_min_max'] = 0;
		// RANGES...........
	if($tab == 'estimate_value_field_group'){
		$estimated_value = str_replace(array('$',','),'',(trim(explode("-", $_GET['tab_value'])[0])));
		$min_value = 5000;
		$max_value = (int)$estimated_value;
		$json['set_min_max'] = 1;
		if($_SESSION['lead_type'] == 'Refi'){
			$json['ranger'] = 'first_balance';
		}else{
			$json['ranger'] = 'down_payment';
		}
		if($min_value >=$max_value){$max_value = $min_value;}
		$json['min'] = $min_value;
		$json['max'] = $max_value;
	}else if($tab == 'first_balance_field_group'){
		$estimated_value = str_replace(array('$',','),'',(trim(explode("-", $_SESSION['estimate_value'])[0])));
		$first_balance = str_replace(array('$',','),'',(trim(explode("-", $_GET['tab_value'])[0])));
		$min_value = 5000;
		$max_value = (int)$estimated_value - (int)$first_balance;
		$json['set_min_max'] = 1;
		$json['ranger'] = 'second_balance';
		if($min_value >=$max_value){$max_value = $min_value;}
		$json['min'] = $min_value;
		$json['max'] = $max_value;
	}else if($tab == 'down_payment_field_group'){
		$estimated_value = str_replace(array('$',','),'',(trim(explode("-",$_SESSION['estimate_value'])[0])));
		$down_payment = str_replace(array('$',','),'',(trim(explode("-",$_GET['tab_value'])[0])));
		$min_value = 5000;
		if($_SESSION['lead_type'] == 'Refi'){
			$first_balance= str_replace(array('$',','),'',(trim(explode("-",$_SESSION['first_balance'])[0])));
			$max_value = (int)$estimated_value - ((int)$first_balance);
		}else{
			$max_value = (int)$estimated_value - (int)$down_payment;
		}
		$json['set_min_max'] = 1;
		$json['ranger'] = 'second_balance';
		if($min_value >=$max_value){$max_value = $min_value;}
		$json['min'] = $min_value;
		$json['max'] = $max_value;
		//$json['session'] = json_encode($_SESSION);
	}else if($tab == 'second_balance_field_group'){
		$estimated_value = str_replace(array('$',','),'',(trim(explode("-",$_SESSION['estimate_value'])[0])));
		$first_balance = str_replace(array('$',','),'',(trim(explode("-",$_SESSION['first_balance'])[0])));
		if(isset($_SESSION['down_payment'])){
			$down_payment = str_replace(array('$',','),'',(trim(explode("-",$_SESSION['down_payment'])[0])));
		}
		$second_balance = str_replace(array('$',','),'',(trim(explode("-",$_GET['tab_value'])[0])));
		$min_value = 5000;
		$max_value = (int)$estimated_value - ((int)$first_balance+(int)$second_balance);
		$json['set_min_max'] = 1;
		$json['ranger'] = 'additional_cash';
		if($min_value >=$max_value){$max_value = $min_value;}
		$json['min'] = $min_value;
		$json['max'] = $max_value;
	}
	// RANGES...........
	if($tab == 'personal_info_field_group'){
			/*--- FIRE TEST PIXEL */
			$promo_code = $_SESSION['promo_code'];
			$sub_id = $_SESSION['sub_id'];
			$sub_id2 = $_SESSION['sub_id2'];
			$url = 'https://www.elitebizpanel.com/mortgage/affiliates/getaffstatus';
			$pixel = file_get_contents($url.'?promo_code='.$promo_code.'&sub_id='.$sub_id.'&sub_id2='.$sub_id2);
			if(!empty($pixel)){
				echo html_entity_decode($pixel);
			}
			if ($_REQUEST['chk_arcamax'] == 'Y') {
				$url = 'https://elitecashwire.com/arcamax.php';
				$fields = [
					'email' => $_SESSION['email'],
					'ipaddress' => $_SERVER['REMOTE_ADDR'],
					'scextcode' => $promo_code,
					'campign_code' => '8760',
				];
				$request = http_build_query($fields);
				$arach_max_response = file_get_contents($url.'?'.$request);
				//echo '<pre>';print_r($arach_max_response);exit;
			}
			$data = $_SESSION;
			$response=file_get_contents('https://elitecashwire.com/get_city_state_from_zip.php?zip='.$data['zip']);
			$citystate = json_decode($response);
			$data['ipaddress'] = $_SERVER['REMOTE_ADDR'];
			$data['lead_mode'] = 1;
			$data['sub_id'] = $_SESSION['sub_id'];
			$data['universal_leadid'] = $_SESSION['universal_leadid'];
			$data['trustedformcerturl'] = $_SESSION['trustedformcerturl'];
			$data['tcpa_optin'] = 1;
			$data['tcpa_text'] = 'form submit';
			$data['property_zip'] = $data['zip'];
			$data['property_state'] = !empty($result->state) ? $result->state : 'NY';
			$data['state'] = !empty($result->state) ? $result->state : 'NY';
			$data['datetime_stamp'] = date('Y-m-d h:m:s');
			$data['loan_type'] = rand(1,3);
			$data['loan_amount'] = 85000;
			/* SEND DATA TO MORTAGE BACKEND */
			$request = http_build_query($data);
			$url = 'https://elitebizpanel.com/mortgage/postprocess';
			//echo $url,$request;exit;
			$result = curlposting($url,$request);
			/* SEND DATA TO MORTAGE BACKEND */
	}
	if(sizeof($mortgageloanSteps) > ($curKey+1)){
		$next_key_name = array_keys($mortgageloanSteps)[$curKey+1];
		$json['hidebuttons'] = $mortgageloanSteps[$next_key_name];
		$json['nextstep'] = $next_key_name;
		$json['success'] = 'success';
		$json['buyorrefinance'] = $_SESSION['buyorrefinance'];
	}else{
		$json['success'] = 'fail';
	}
	echo json_encode($json);
}

function curlposting($url,$request,$header=false,$buffersize = 60,$methodpost = false){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,  1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$request);
	curl_setopt($ch,CURLOPT_FAILONERROR,1);
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($ch,CURLOPT_TIMEOUT,20);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}