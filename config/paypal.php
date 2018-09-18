<?php

	return array(
	/** set your paypal credential **/
	'client_id' =>'AQ2BWaazy7Nr2gXPvInmHxAaHc57-LanDgb7EOewzJU5JtsdJBeTvNgGTqBjbInSuqs15MIgpsggSYh5',
	'secret' => 'EELCgSUZIruhsQJjM1eRbuaqAuMU-IgAaE1rTwQ23pkej-udmPc4ViVnCGcwBPpfSh83fPc-X9h-XJfS',
	/**
	* SDK configuration 
	*/
	'settings' => array(
		/**
		* Available option 'sandbox' or 'live'
		*/
		'mode' => 'sandbox',
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