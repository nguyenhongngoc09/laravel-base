<?php

namespace App\Backend\Http\Controllers;

use View;
use Illuminate\View\FileViewFinder;
use App\Core\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
	public function __construct()
	{
		$finder = new FileViewFinder(app()['files'], [realpath(base_path('resources/views/backend'))]);
		View::setFinder($finder);
	}
}
