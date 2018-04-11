<?php

namespace App\Backend\Services;

use App\Core\Models\ContributorProfile;
use App\Backend\Repositories\ContributorProfileRepository;

class ContributorService extends Service implements FormService
{
    private $contributorProfileRepository;

    public function __construct(ContributorProfileRepository $contributorProfileRepository)
    {
        $this->contributorProfileRepository = $contributorProfileRepository;
    }

    public function all()
    {
        return $this->contributorProfileRepository->all();
    }
    public function find($id)
    {
        return $this->contributorProfileRepository->find($id);
    }
    public function save($data)
    {
        if(!empty($data['id'])) {
            return ContributorProfile::find($data['id'])->update($data);
        }
        $contributorProfile = new ContributorProfile();
        $contributorProfile->fill($data);
        return $contributorProfile->save();
    }
}