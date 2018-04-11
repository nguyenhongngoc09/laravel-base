<?php

namespace App\Api\User\Services;

use Auth;
use App\Api\User\Repositories\UserRepository;
use App\Api\User\Repositories\UserProfileRepository;

class UserService extends Service
{
	/**
	 * Repository variable
	 *
	 * @var UserRepository
	 */
    private $userRepository;

    public function __construct(UserRepository $userRepository, UserProfileRepository $userProfileRepository)
    {
        $this->userRepository = $userRepository;
        $this->userProfileRepository = $userProfileRepository;
    }

    public function getCurrentProfile()
    {
        $currentUserId = Auth::user()->id;
    	return $this->userProfileRepository->getProfile($currentUserId);
    }
}