<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Academy extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "academies";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'academy_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academy_code' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'academy_code' => 'required|string'
    ];

}
