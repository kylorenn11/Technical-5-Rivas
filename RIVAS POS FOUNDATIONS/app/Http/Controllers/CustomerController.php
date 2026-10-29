<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        // Temporary data source required by the laboratory activity.
        $customers = [
            ['id' => 1, 'name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 555 0101', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Brandon Cruz', 'email' => 'brandon.cruz@example.com', 'phone' => '0917 555 0102', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Camille Santos', 'email' => 'camille.santos@example.com', 'phone' => '0917 555 0103', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Diego Garcia', 'email' => 'diego.garcia@example.com', 'phone' => '0917 555 0104', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Elena Mendoza', 'email' => 'elena.mendoza@example.com', 'phone' => '0917 555 0105', 'status' => 'Active'],
        ];

        return view('customers', compact('customers'));
    }
}
