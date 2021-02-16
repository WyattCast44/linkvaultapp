<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
        ]);

        $users = User::factory(10)->create();

        $users->each(function ($user) {
            Link::factory(10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
