<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Article extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "articles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'eyecatch_img',
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
        'eyecatch_img' => 'string',
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
