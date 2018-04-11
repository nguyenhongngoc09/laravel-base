<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ItemStatistic extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "item_statistics";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'item_type',
		'item_id',
		'view_count',
		'like_count',
		'share_count',
		'favorite_count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_type' => 'boolean',
		'item_id' => 'integer',
		'view_count' => 'integer',
		'like_count' => 'integer',
		'share_count' => 'integer',
		'favorite_count' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'item_type' => 'required',
		'item_id' => 'required|integer',
		'view_count' => 'integer',
		'like_count' => 'integer',
		'share_count' => 'integer',
		'favorite_count' => 'integer'
    ];

}
