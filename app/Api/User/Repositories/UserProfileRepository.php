<?php

namespace App\Api\User\Repositories;

use Auth;
use App\Core\Repositories\Repository;

class UserProfileRepository extends Repository
{
	/**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Api\Common\Models\UserProfile';
    }

    public function getProfile($userId)
    {
    	return $this->model->find($userId);
    }
}