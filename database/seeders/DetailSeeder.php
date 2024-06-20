<?php

namespace Database\Seeders;

use App\Models\detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        detail::create([
            'Title' => 'this is laravel',
            'Sub_Title' => 'laravel',
            'Body_Content' => 'this is a laravel demo',
        ]);
    }
}
