<?php
namespace Caffeinated\Gamification\Traits;

trait GamificationTrait
{
	/**
	 * Users have one gamification "profile".
	 *
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function gamification()
	{
		return $this->hasOne('Caffeinated\Gamification\Models\Gamification')->withTimestamps();
	}

	/**
	 * Users can have many badges.
	 *
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function badges()
	{
		return $this->belongsToMany('Caffeinated\Gamification\Models\Badge')->withTimestamps();
	}

	/**
	 * Get all of the users badges.
	 *
	 * @return array|null
	 */
	public function getBadges()
	{
		if (! is_null($this->badges)) {
			return $this->badges->lists('slug');
		}

		return null;
	}

	/**
	 * Checks if the user has the given badge.
	 *
	 * @return bool
	 */
	public function hasBadge($slug)
	{
		$slug = strtolower($slug);

		foreach ($this->badges as $badge) {
			if ($badge->slug == $slug) return true;
		}

		return false;
	}
}