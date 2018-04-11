<?php

namespace App\Backend\Services;

interface FormService
{
    public function all();
    public function find($id);
    public function save($data);
}