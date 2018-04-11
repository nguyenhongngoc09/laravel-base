<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class MenuItem extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "menu_items";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'title',
		'target_type',
		'content_type',
		'pos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
		'target_type' => 'boolean',
		'content_type' => 'boolean',
		'pos' => 'boolean'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string',
		'target_type' => 'required',
		'content_type' => 'required',
		'pos' => 'required'
    ];

}
