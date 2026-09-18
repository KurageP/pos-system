<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'jdelacruz',
                'full_name' => 'Juan Dela Cruz',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'msantos',
                'full_name' => 'Maria Santos',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'preyes',
                'full_name' => 'Pedro Reyes',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'agarcia',
                'full_name' => 'Ana Garcia',
                'role'      => 'Inventory Staff',
            ],
            [
                'username'  => 'jramirez',
                'full_name' => 'Jose Ramirez',
                'role'      => 'Admin',
            ],
        ];

        return view('users/index', ['users' => $users]);
    }
}