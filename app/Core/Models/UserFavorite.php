<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class UserFavorite extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "user_favorites";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'item_type',
		'item_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
		'item_type' => 'boolean',
		'item_id' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
		'item_type' => 'required',
		'item_id' => 'required|integer'
    ];

}
