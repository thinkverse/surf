<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $attributes = collect([
            'name' => 'Wave Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'role_id' => 1,
        ]);

        if (Storage::disk('public')->exists('avatars/admin.png')) {
            $attributes->put('avatar', 'avatars/admin.png');
        }

        User::factory()->create($attributes->toArray());
    }
}
