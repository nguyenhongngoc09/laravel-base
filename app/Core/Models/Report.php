<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Report extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "reports";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'target_id',
		'target_author',
		'title',
		'content',
		'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'target_id' => 'integer',
		'target_author' => 'integer',
		'title' => 'string',
		'content' => 'string',
		'created_by' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'target_id' => 'required|integer',
		'target_author' => 'required|integer',
		'title' => 'required|string',
		'content' => 'required',
		'created_by' => 'required|integer'
    ];

}
