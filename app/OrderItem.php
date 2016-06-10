<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
	protected $table = 'order_item';

	/**
	 * Get the user that owns the order item.
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
