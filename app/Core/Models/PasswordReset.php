<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PasswordReset extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "password_resets";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'email',
		'token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
		'token' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|string',
		'token' => 'required|string'
    ];

}
