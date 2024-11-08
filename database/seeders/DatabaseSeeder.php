<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin12345'),
            'sekolah_id' => 1,
        ]);

        // Sekolah::factory()->create([
        //     'nama_sekolah' => 'Sekolah Test',
        //     'npsn_sekolah' => '1234567890',
        //     'jenjang_sekolah' => 'smk',
        //     'alamat_sekolah' => 'Jln. Test No. 123',
        //     'email_sekolah' => 'test@example.com',
        // ]);
    }
}
