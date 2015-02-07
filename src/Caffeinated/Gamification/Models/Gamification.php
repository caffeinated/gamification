<?php
namespace Caffeinated\Gamification\Models;

use Config;
use Illuminate\Database\Eloquent\Model;

class Gamification extends Model
{
	/**
	 * The attributes that are fillable via mass assignment.
	 *
	 * @var array
	 */
	protected $fillable = ['points', 'level'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gamification';

	/**
	 * Every Gamification profile belongs to one user.
	 *
	 * @return Model
	 */
	public function user()
	{
		return $this->belongsTo(Config::get('auth.model'))->withTimestamps();
	}
}