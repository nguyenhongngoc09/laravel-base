<?php

use Illuminate\Database\Seeder;
use App\Core\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'ntq@gmail.com',
        ]);
    }
}
