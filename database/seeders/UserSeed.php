<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'test ne',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678'),
        ]);
        $role = Role::updateOrCreate(['name' => 'Admin']);
        $user->assignRole($role);

        $ctv = User::create([
            'name' => 'ctv',
            'email' => 'ctv@example.com',
            'password' => Hash::make('12345678'),
        ]);
        $ctv->assignRole('ctv');
    }
}
