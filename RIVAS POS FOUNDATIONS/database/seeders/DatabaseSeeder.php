<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 555 0101', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brandon Cruz', 'email' => 'brandon.cruz@example.com', 'phone' => '0917 555 0102', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camille Santos', 'email' => 'camille.santos@example.com', 'phone' => '0917 555 0103', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Diego Garcia', 'email' => 'diego.garcia@example.com', 'phone' => '0917 555 0104', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elena Mendoza', 'email' => 'elena.mendoza@example.com', 'phone' => '0917 555 0105', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('pos_users')->insert([
            ['name' => 'Maria Dela Cruz', 'email' => 'maria.delacruz@example.com', 'role' => 'Administrator', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noah Bautista', 'email' => 'noah.bautista@example.com', 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Olivia Navarro', 'email' => 'olivia.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paolo Villanueva', 'email' => 'paolo.villanueva@example.com', 'role' => 'Cashier', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Ramos', 'email' => 'sofia.ramos@example.com', 'role' => 'Supervisor', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
