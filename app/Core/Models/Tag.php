<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Tag extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "tags";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string'
    ];

}
