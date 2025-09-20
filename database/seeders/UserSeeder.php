<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create permissions
        $permissions = ['edit form', 'delete form', 'view dashboard', 'add form', 'show form'];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo($permissions);

        // Create admin user
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@studyadvicenepal.com'],
            [
                'name' => 'Super Admin',
                'phone' => '9800000000',
                'email_verified_at' => now(),
                'password' => Hash::make('HRCr^"x}%8jHqY4h'), // Change for production
                'is_phone_verified' => 1,
                'status' => 'active',
            ],
        );
        $adminUser->assignRole($adminRole);
    }
}
