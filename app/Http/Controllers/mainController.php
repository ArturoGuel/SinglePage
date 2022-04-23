<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class mainController extends Controller
{
    public function indx(Faker $faker)
    {
       /*
        for ($i=0; $i < 9999443; $i++) { 
            # code...
            $que = new User();
            $que->password= '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            $que->email= $faker->unique()->safeEmail ;
            $que->pais=  $faker->randomElement(['Estados_unidos', 'Mexico']);
            $que->estado=  $faker->state;
            $que->genero= $faker->randomElement(['male', 'female']) ;
            $que->save();
        }
            dd('ok');
       */
        return view('welcome');
    
    }

    public function dash()
    {
        $usrs = DB::table('users')->paginate(15);
        
        return view('dashboard',compact('usrs'));
    }
}
