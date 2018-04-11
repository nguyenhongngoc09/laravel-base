<?php

use Illuminate\Database\Seeder;
use App\Core\Models\Contributor;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contributor::class)->create([
            'email' => 'ntq@gmail.com',
        ]);
    }
}
