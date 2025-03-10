<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Simulasi data tanpa database
        $profile = [
            'name' => 'Radiva Hera',
            'email' => 'radiva@mail.com',
            'bio' => 'Guru SMKN 1 Sayung',
            'profile_picture' => 'user1.png',
            'skills' => ['Laravel', 'PHP', 'Blade', 'Tailwind CSS']
        ];

        return view('profile', compact('profile'));
    }
}
