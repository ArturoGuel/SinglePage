<?php

namespace App\Http\Controllers;

use Faker\Generator as Faker;

// Helpers
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// Models
use App\Models\User;

class mainController extends Controller
{
    public function indx(Faker $faker)
    {
        return view('welcome');
    
    }

    public function dash()
    { 
        return view('dashboard');
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('login')->header('Cache-Control', 'no-store, no-cache, private, must-revalidate');
    }
}
