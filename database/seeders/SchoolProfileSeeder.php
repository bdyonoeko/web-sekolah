<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SchoolProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_profile')->insert([
            'tentang' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.',
            'visi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.',
            'misi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.',
            'alamat' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.',
            'email_sekolah' => 'websekolah@gmail.com',
            'telepon' => '12345678',
        ]);
    }
}
