<?php

namespace App\Api\Common\Transformers;

use App\Api\Common\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'user_id' => (int) $user->id,
            'email' => $user->email,
        ];
    }
}
