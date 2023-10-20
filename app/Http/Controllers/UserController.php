<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller  {

    public function __construct(){
    }    
    
    public function index(){                            
        $users = DB::table('users')->select('*')->get();
        return view('user.index', ['users' => $users]);
    }

    public function addUsers(Request $request) {
        User::create([
            "name" => $request["name"],
            "phone" => $request["phone"],
            "email" => $request["email"],
            "password" => $request["password"],
            "address" => $request["address"],
        ]);
        return redirect()->route('moreUser')->with('success', 'Thêm người dùng thành công.');
    }

    public function editUser($id) {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    
    public function updateUser(Request $request, $id) {
        $user = User::find($id);
        $user->update( $request -> all() );
        return redirect()->route('user.index')->with('success', 'Cập nhật người dùng thành công.');
    }
    
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('error', 'Xoá người dùng thành công.');
    }
    

}