<?php

	return array(
	/** set your paypal credential **/
	'client_id' =>'AdSb5S-BUr2OFYpl0hyar2lB-5JQ03-qe9InNwR-TZUzHWNAnr7znw_1ecwChlPxxWLZFo90G8jdKNn7',
	'secret' => 'EOfEDF9o2m-QLUQamk8rcBqIL8_k_ICF88yGZIHDcJ8rGNOjb13DIUfGg8dq6ggXKFQgp3JI1Ov2vKcY',
	/**
	* SDK configuration 
	*/
	'settings' => array(
		/**
		* Available option 'sandbox' or 'live'
		*/
		'mode' => 'live',
		/**
		* Specify the max request time in seconds
		*/
		'http.ConnectionTimeOut' => 1000,
		/**
		* Whether want to log to a file
		*/
		'log.LogEnabled' => true,
		/**
		* Specify the file that want to write on
		*/
		'log.FileName' => storage_path() . '/logs/paypal.log',
		/**
		* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
		*
		* Logging is most verbose in the 'FINE' level and decreases as you
		* proceed towards ERROR
		*/
		'log.LogLevel' => 'FINE'
		),
	);