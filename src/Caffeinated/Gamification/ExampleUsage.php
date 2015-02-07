<?php

// Give user 25 points
Gamify::give(25);

// Give 25 points towards "example" badge for user
Gamify::give(25, 'example');
// OR?
// For a simple increment by 1 system for badges
Gamify::increment('example');

// Takes 25 points from user
Gamify::take(25);

// Takes 25 points from the user obtaining the "example" badge
Gamify::take(25, 'example');

// Checks if user has the given badge
Auth::user()->hasBadge('example');

// Checks if user is at least level 5
Auth::user()->atLeastLevel(5);

// Returns the users level
Auth::user()->getLevel();

// Returns the users total experience points
Auth::user()->getPoints();

// Returns the users badges
Auth::user()->badges();

// Returns the users remaining experience points needed till leveling up
Auth::user()->untilNextLevel();

// Returns the remaining experience points until user hits level 10
Auth::user()->untilLevel(10);