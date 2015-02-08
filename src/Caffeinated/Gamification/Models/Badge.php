<?php
namespace Caffeinated\Gamification\Models;

use Config;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
	/**
	 * The attributes that are fillable via mass assignment.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'slug', 'description', 'points'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'badges';

	/**
	 * Badges can belong to many users.
	 *
	 * @return Model
	 */
	public function users()
	{
		return $this->belongsToMany(Config::get('auth.model'))->withPivot('points')->withTimestamps();
	}
}