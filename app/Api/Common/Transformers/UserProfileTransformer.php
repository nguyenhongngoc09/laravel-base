<?php

namespace App\Api\Common\Transformers;

use App\Api\Common\Models\UserProfile;
use League\Fractal\TransformerAbstract;

class UserProfileTransformer extends TransformerAbstract
{
    public function transform(UserProfile $profile)
    {
        return [
            'nickname' => $profile->nickname,
            'fullname' => $profile->firstname . $profile->lastname,
            'gender' => $profile->gender_label,
        ];
    }
}
