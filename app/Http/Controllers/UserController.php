<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
    $name = "Jewel";
    $school = "Laracast";

    // The with-method
    // return view('index')->with('name', $name);

    // The compact method
    return view('index', compact('name', 'school'));

    // The direct method
    return view('index', [
        'name' => $name,
        'school' => $school,
    ]);
    }

    public function register(Request $request){
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $saveUser = $user->save();
        if ($saveUser) {
            return view('index')->with('message', 'User saved successfully!');
        } else {
            return view('index')->with('message', 'Error occurred, please try again...');
        }
        return Redirect('/displayUsers');
    }

    public function displayUsers(){
        $allusers= DB::table('users')->get();
        // return $allusers;
        return view('display', [
            'users' => $allusers,
        ]);
}
}