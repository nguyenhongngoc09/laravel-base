<?php

namespace App\Backend\Http\Controllers;

use App\Backend\Services\ContributorService;

class ContributorController extends FormController
{
    protected $serviceClass = ContributorService::class;
    protected $viewFolder = 'contributors';
}