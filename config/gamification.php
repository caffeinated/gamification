<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Use a multiplier
	|--------------------------------------------------------------------------
	|
	| This will simulate the way enemies give out more exp. points at higher
	| user levels in video games.
	|
	| Formula: (user's level / 2) * given experience
	|
	*/

	'multiplier' => true,

	/*
	|--------------------------------------------------------------------------
	| Levels
	|--------------------------------------------------------------------------
	|
	| Define the levels and required experience to obtain each level. The
	| initial set of levels below are based off the experience points required
	| to level up in the first Final Fantasy game. Feel free to add more!
	|
	*/

	'levels' => [
		1 => 0,
		2 => 28,
		3 => 84,
		4 => 196,
		5 => 392,
		6 => 700,
		7 => 1148,
		8 => 1764,
		9 => 2576,
		10 => 3612,
		11 => 4900,
		12 => 6468,
		13 => 8344,
		14 => 10556,
		15 => 13132,
		16 => 16100,
		17 => 19488,
		18 => 23324,
		19 => 27636,
		20 => 32452,
		21 => 37800,
		22 => 43708,
		23 => 50204,
		24 => 57317,
		25 => 65072
	],

];