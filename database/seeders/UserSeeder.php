<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Super Admin",
                "email" => "superadmin@example.com",
                "password" => password_hash("password", PASSWORD_BCRYPT),
                "role" => "Superadmin",
            ],
            [
                "name" => "Admin User",
                "email" => "admin@example.com",
                "password" => password_hash("password", PASSWORD_BCRYPT),
                "role" => "Admin",
            ]
        ];

        // Assuming you have a method to save users to the database
        foreach ($users as $user) {
            $this->saveUser($user);
        }
    }

    private function saveUser($user)
    {
        // Logic to save the user to the database
        // For example, using a hypothetical User model
        $userModel = new User();
        $userModel->name = $user['name'];
        $userModel->email = $user['email'];
        $userModel->password = $user['password'];
        $userModel->save();
        $userModel->assignRole($user['role']); 
    }
}
