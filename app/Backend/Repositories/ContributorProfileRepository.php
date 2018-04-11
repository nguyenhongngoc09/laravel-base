<?php

namespace App\Backend\Repositories;

use App\Core\Repositories\Repository;

class ContributorProfileRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Core\Models\ContributorProfile';
    }
}