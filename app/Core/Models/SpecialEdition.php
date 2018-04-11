<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class SpecialEdition extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "special_editions";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'title',
		'description',
		'content_type',
		'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
		'description' => 'string',
		'content_type' => 'boolean',
		'created_by' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string',
		'content_type' => 'required',
		'created_by' => 'required|integer'
    ];

}
