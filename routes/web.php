<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba',function(){

    $user = User::where('id',1)
        ->with('phone')
        ->first();
    return $user;

/*     Phone::create([ 
        'number' => '123456789',
        'user_id' => 1 ,
        
    ]);
    return 'creado'; */

  /*   User::create([
        'name' => 'Victoria',
        'email' => 'victoria@email.com',
        'password' => '123456789',
    ]);
    return 'usuario creado'; */

    // return view('prueba');
});
