<?php

use Illuminate\Database\Seeder;
use App\Core\Models\User;
use App\Core\Models\UserProfile;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserProfile::class)->create();
    }
}
