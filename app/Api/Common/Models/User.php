<?php

namespace App\Api\Common\Models;

use App\Core\Models\User as UserBaseModel;
use App\Api\Common\Contracts\Transformable;
use App\Api\Common\Transformers\UserTransformer;

class User extends UserBaseModel implements Transformable
{
    public function getTransformer()
    {
        return new UserTransformer;
    }
}
