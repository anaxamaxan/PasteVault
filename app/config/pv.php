<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Minutes to cache
	|--------------------------------------------------------------------------
	|
	| The selection of minutes text can be cached for
	|
	*/

	'minutes' => array(
		'10'     => Lang::get('pv.minutes', array('minutes'=>10)),
		'60'     => Lang::get('pv.hour', array('hour'=>1)),
		'720'    => Lang::get('pv.hours', array('hours'=>12)),
		'1440'   => Lang::get('pv.hours', array('hours'=>24)),
		'2880'   => Lang::get('pv.hours', array('hours'=>48)),
		'10080'  => Lang::get('pv.days', array('days'=>7)),
	),

	/*
	|--------------------------------------------------------------------------
	| Max text size (in bytes)
	|--------------------------------------------------------------------------
	|
	| Generally PasteVault is designed to store small bits of text so don't allow
	| text larger than this. Note, this limit is checked after the text has been
	| encrypted and base 64 encoded client side which means is't significantly 
	| larger than the original text entered by the user.
	|
	*/

	'max_size' => 32000,

	/*
	|--------------------------------------------------------------------------
	| Google Analytics ID
	|--------------------------------------------------------------------------
	|
	| If you enter your analytics ID the GA code will be added to the site.
	|
	| Below is currently setup for PHPFog, but a regular string key can be used
	| in most situations.	
	*/

	'google_analytics' => stripslashes($_SERVER['PV_GOOGLE_STATS']),		

	/*
	|--------------------------------------------------------------------------
	| Terms of service company
	|--------------------------------------------------------------------------
	|
	| The company running this hosted instance of PasteVault
	|
	| Below is currently setup for PHPFog, but a regular string key can be used
	| in most situations.	
	*/

	'company' => stripslashes($_SERVER['PV_COMPANY']),	
);