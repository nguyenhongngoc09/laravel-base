<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class SpecialEditionSeries extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "special_edition_series";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'special_edition_id',
		'series_id',
		'month_amount',
		'pos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'special_edition_id' => 'integer',
		'series_id' => 'integer',
		'month_amount' => 'boolean',
		'pos' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'special_edition_id' => 'required|integer',
		'series_id' => 'required|integer',
		'month_amount' => 'required',
		'pos' => 'required|integer'
    ];

}
