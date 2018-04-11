<?php

namespace App\Api\Common\Models;

use App\Core\Models\UserProfile as UserProfileBaseModel;

use App\Api\Common\Contracts\Transformable;
use App\Api\Common\Transformers\UserProfileTransformer;

class UserProfile extends UserProfileBaseModel implements Transformable
{
    public function getTransformer()
    {
        return new UserProfileTransformer;
    }
}
