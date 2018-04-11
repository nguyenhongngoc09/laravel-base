<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class UserProfile extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'user_profiles';

    public $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'nickname',
		'firstname',
		'lastname',
		'gender',
		'birthday',
		'job',
		'plan_id',
		'plan_regist_date',
		'payment_method_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
		'nickname' => 'string',
		'firstname' => 'string',
		'lastname' => 'string',
		'gender' => 'boolean',
		'birthday' => 'date',
		'job' => 'string',
		'plan_id' => 'integer',
		'payment_method_id' => 'integer'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
		'nickname' => 'required|string',
		'firstname' => 'required|string',
		'lastname' => 'required|string',
		'gender' => 'required',
		'birthday' => 'required|date',
		'job' => 'required|string',
		'plan_id' => 'required|integer',
		'plan_regist_date' => 'required',
		'payment_method_id' => 'integer'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['gender_label'];

    /**
     * Get gender label
     *
     * @return bool
     */
    public function getGenderLabelAttribute()
    {
        $genderList = config('const.gender_list');
        return $genderList[$this->attributes['gender']];
    }
}
