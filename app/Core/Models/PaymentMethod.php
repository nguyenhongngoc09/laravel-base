<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PaymentMethod extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "payment_methods";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'type',
		'card_number',
		'expire_date',
		'security_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'boolean',
		'card_number' => 'integer',
		'security_code' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required',
		'card_number' => 'integer',
		'security_code' => 'string'
    ];

}
