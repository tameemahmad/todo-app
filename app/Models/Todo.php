<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	use HasFactory;
	protected $table = 'todo';
	protected $fillable = ['name', 'author', 'status', 'priority', 'due_date', 'timezone'];
	protected $dates = ['due_date'];
	
		
	/**
	 * items
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function items()
	{
		return $this->hasMany(Item::class);
	}	
	
	public function getDuedateAttribute($value)
	{
		return Carbon::parse($value);
	}
}
