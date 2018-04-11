<?php

namespace App\Api\User\Http\Controllers;

use Auth;
use App\Api\User\Services\UserService;

class UserController extends Controller
{
	protected $userService;

	public function __construct(UserService $userService)
	{
		$this->userService = $userService;
	}

	public function profile()
	{
		$profile = $this->userService->getCurrentProfile();
		return response()->jsonOk($profile);
	}
}