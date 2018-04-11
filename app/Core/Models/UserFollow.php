<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class UserFollow extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "user_follows";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'contributor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
		'contributor_id' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
		'contributor_id' => 'required|integer'
    ];

}
