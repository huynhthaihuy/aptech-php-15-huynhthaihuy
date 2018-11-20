<?php
namespace App\Http\Controllers;
use App\Passport;
use App\Users;
use App\Phone;
class UserController extends Controller
{
    //
    public function index()
    {
        $users = Users::with('phone')->get()->toArray();
        return view('users.index', ['users' => $users]);
    }
    // public function passportIndex()
    // {
    //     $passports = Passport::with('user')->get()->toArray();
    //     dd($passports);
    //     return view('users.index', ['users' => $users]);
    // }
    // public function phoneIndex(){
    //     $phones = Phone::with('user')->get()->toArray();
    //     $users = Users::with('phone')->get()->toArray();
    //     return view('user.index',['users'=>$users]);
    // }
}