<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Temporary data source required by the laboratory activity.
        $users = [
            ['id' => 1, 'name' => 'Maria Dela Cruz', 'email' => 'maria.delacruz@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Noah Bautista', 'email' => 'noah.bautista@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Olivia Navarro', 'email' => 'olivia.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Paolo Villanueva', 'email' => 'paolo.villanueva@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Sofia Ramos', 'email' => 'sofia.ramos@example.com', 'role' => 'Supervisor', 'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}
