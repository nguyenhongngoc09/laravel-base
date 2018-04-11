<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Paragraph extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "paragraphs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'article_id',
		'title',
		'description',
		'img_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'article_id' => 'integer',
		'title' => 'string',
		'description' => 'string',
		'img_path' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'article_id' => 'required|integer',
		'title' => 'string',
		'description' => 'string'
    ];

}
