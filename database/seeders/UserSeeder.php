<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) {
            $service = Service::inRandomOrder()
                ->limit(1)
                ->first(['id']);
            DB::table('users')->insert([
                'name' => 'User Name' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('saadwadi' . $i),
                'image_url' => 'front/images/homepage/left-side/left-img-' . $i . '.jpg',
                'service_id' => $service->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
