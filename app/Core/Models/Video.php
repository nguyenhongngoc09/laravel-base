<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Video extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "videos";

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
		'path',
		'total_time',
		'thumbnail_1',
		'thumbnail_2',
		'thumbnail_3',
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
		'path' => 'string',
		'total_time' => 'integer',
		'thumbnail_1' => 'string',
		'thumbnail_2' => 'string',
		'thumbnail_3' => 'string',
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
		'path' => 'required',
		'total_time' => 'required|integer',
		'thumbnail_1' => 'required',
		'thumbnail_2' => 'required',
		'thumbnail_3' => 'required',
		'created_by' => 'required|integer'
    ];

}
