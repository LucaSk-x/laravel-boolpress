<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
Use App\User;
use App\Details;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }


    public function edit($id) {

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, $id) {
        
        $data = $request->all();
        $user = User::findOrFail($id);

        if(!$user->details){
            $user->details = new Details();
        }
        $user->details->user_id = $user->id;
        $user->details->fill($data);
        $user->details->save();
        
        return redirect(route('admin.users.show', $user->id));
    }

    public function show($id) {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }
}
