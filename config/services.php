<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'ImagesManager\User',
		'key' => '',
		'secret' => '',
	],
    'github' => [
        'client_id' => '0154b82cfbdd6b166139',
        'client_secret' => 'bc9362a02a5273581efe731e087a06ca11fc9da4',
        'redirect' => 'https://exame.medizin.uni-due.de',
    ],
];
