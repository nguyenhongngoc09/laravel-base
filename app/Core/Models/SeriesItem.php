<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class SeriesItem extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "series_items";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'series_id',
		'item_id',
		'month_amount',
		'pos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'series_id' => 'integer',
		'item_id' => 'integer',
		'month_amount' => 'boolean',
		'pos' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'series_id' => 'required|integer',
		'item_id' => 'required|integer',
		'month_amount' => 'required',
		'pos' => 'required|integer'
    ];

}
