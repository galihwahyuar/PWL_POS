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
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'level_id']);
        $user->wasChanged('nama');
        $user->wasChanged(['nama', 'username']);
        dd($user->wasChanged(['nama', 'username']));
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