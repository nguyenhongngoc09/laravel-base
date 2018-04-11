<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ContributorProfile extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "contributor_profiles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'eyecatch_img',
		'is_kol',
		'surname',
		'name',
		'gender',
		'job',
		'birthday',
		'address',
		'profile'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'eyecatch_img' => 'string',
		'is_kol' => 'boolean',
		'surname' => 'string',
		'name' => 'string',
		'gender' => 'boolean',
		'job' => 'string',
		'address' => 'string',
		'profile' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'is_kol' => 'required',
		'surname' => 'required|string',
		'name' => 'required|string',
		'gender' => 'required',
		'job' => 'required|string',
		'birthday' => 'required',
		'address' => 'required|string'
    ];

}
