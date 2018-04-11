<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Series extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "series";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'item_type',
		'title',
		'description',
		'content_type',
		'is_public',
		'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_type' => 'boolean',
		'title' => 'string',
		'description' => 'string',
		'content_type' => 'boolean',
		'is_public' => 'boolean',
		'created_by' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'item_type' => 'required',
		'title' => 'required|string',
		'content_type' => 'required',
		'is_public' => 'required',
		'created_by' => 'required|integer'
    ];

}
