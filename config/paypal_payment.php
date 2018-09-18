<?php

return array(
	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => env('PAYPAL_CLIENT_ID', 'AQ2BWaazy7Nr2gXPvInmHxAaHc57-LanDgb7EOewzJU5JtsdJBeTvNgGTqBjbInSuqs15MIgpsggSYh5'),
		'ClientSecret' => env('PAYPAL_CLIENT_SECRET', 'EELCgSUZIruhsQJjM1eRbuaqAuMU-IgAaE1rTwQ23pkej-udmPc4ViVnCGcwBPpfSh83fPc-X9h-XJfS'),
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		'EndPoint' => 'https://api.sandbox.paypal.com',
	),


	# Logging Information
	'Log' => array(
		'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		'LogLevel' => 'FINE',
	),
);
