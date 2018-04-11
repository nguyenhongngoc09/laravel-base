<?php

namespace App\Api\User\Repositories;

use App\Core\Repositories\Repository;

class UserRepository extends Repository
{
	/**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Api\Common\Models\User';
    }
}