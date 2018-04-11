<?php

namespace App\Core\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contributor extends Authenticatable
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "contributors";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'role',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role' => 'boolean',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'role' => 'required',
        'email' => 'required|string',
        'password' => 'required|string'
    ];

    /**
     * Overrides the method to ignore the remember token.
     *
     * @param string $key
     * @param void $value
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }
}
