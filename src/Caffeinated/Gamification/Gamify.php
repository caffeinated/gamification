<?php namespace Caffeinated\Gamification;

use Models\Badge;

class Gamify
{

	public function give($points = 0, $badge = null) 
    {
        if(!is_null($badge)) return $this->givePointsToBadge($points, $badge);
        return $this->givePointsToUser($points);
    }

    private function givePointsToUser($points)
    {
        Auth::user()->points += $points;
        return Auth::user()->save();
    }

    private function givePointsToBadge($points, $badge)
    {
        if(Badge::byName($badge) && Auth::user()->hasBadge($badge)) {
            Auth::user()->badge->where('name', $badge)->points += $points;
            return Auth::user()->badge->save();
        }
    }
}