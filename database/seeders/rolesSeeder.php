<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['presidente', 'vicepresidente', 'segretario', 'consigliere'];
        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->role = $role;
            $newRole->save();
        }
    }
}
