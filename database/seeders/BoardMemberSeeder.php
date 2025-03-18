<?php

namespace Database\Seeders;

use App\Models\BoardMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $members = [
            ['role_id' => 1, 'first_name' => 'Manuel', 'last_name' => 'Anticoli'],
            ['role_id' => 2, 'first_name' => 'Stefano', 'last_name' => 'Caresia'],
            ['role_id' => 3, 'first_name' => 'Roberto', 'last_name' => 'Seppi'],
            ['role_id' => 4, 'first_name' => 'Francesca', 'last_name' => 'Danielis'],
            ['role_id' => 4, 'first_name' => 'Giustino', 'last_name' => 'Fumi'],
            ['role_id' => 4, 'first_name' => 'Stefano', 'last_name' => 'De Cassan'],
            ['role_id' => 4, 'first_name' => 'Giovanni', 'last_name' => 'Padovan'],
            ['role_id' => 4, 'first_name' => 'Annamaria', 'last_name' => 'Trentin'],
            ['role_id' => 4, 'first_name' => 'Cristian', 'last_name' => 'Pattaro'],
        ];

        foreach ($members as $member) {
            $new_member = new BoardMember();
            $new_member->first_name = $member['first_name'];
            $new_member->last_name = $member['last_name'];
            $new_member->role_id = $member['role_id'];
            $new_member->profile_img = 'images/profile_img.webp';
            $new_member->save();
        }
    }
}
