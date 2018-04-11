<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ItemTag extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "item_tags";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'item_type',
		'item_id',
		'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_type' => 'boolean',
		'item_id' => 'integer',
		'tag_id' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'item_type' => 'required',
		'item_id' => 'required|integer',
		'tag_id' => 'required|integer'
    ];

}
