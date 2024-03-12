<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrCreate([
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        //$user->username = 'manager45';

    //$user->isDirty(); //true
    //$user->isDirty('username'); //true
    //$user->isDirty('nama'); //false
    //$user->isDirty(['nama', 'username']); //false

    /*$user->isClean(); //true
    $user->isClean('username'); //true
    $user->isClean('nama'); //false
    $user->isClean(['nama', 'username']); //false*/

    //$user->save();

    /*$user->isDirty();
    $user->isClean();
    dd($user->isDirty());*/
    }
}   

/*$user = UserModel::findOr(20,['username', 'nama'], function(){abort(404);});*/
//$user = UserModel::find(1);
//$user = UserModel::where('level_id', 1)->first();
//$user = UserModel::firstWhere('level_id', 1);
//$user = UserModel::findOr(1,['username', 'nama'], function(){abort(404);*/

    //$user->username = 'manager45';

    //$user->isDirty(); //true
    //$user->isDirty('username'); //true
    //$user->isDirty('nama'); //false
    //$user->isDirty(['nama', 'username']); //false

    /*$user->isClean(); //true
    $user->isClean('username'); //true
    $user->isClean('nama'); //false
    $user->isClean(['nama', 'username']); //false*/

    //$user->save();

    /*$user->isDirty();
    $user->isClean();
    dd($user->isDirty());*/