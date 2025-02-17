<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));   
    }

    public function store(Request $request) {
        $input = $request->all();
        if($request->input('password')){
            $input['password'] = bcrypt($input['password']);
        }
        User::create($input);
        return redirect('/user');
    }

    function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $data = $request->all();
        if($request->input('password')){
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = Arr::except($data, ['password']);
        }
        $user->update($data);
        return redirect('/user');
    }

    function show($id) {
        $user = User::findOrFail($id);
        $room = Room::where('user_id', $id)->get()->all();
        return view('user.detail', compact('user','room'));
    }

    function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}
