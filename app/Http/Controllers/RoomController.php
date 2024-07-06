<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $rooms = Room::with('user')->get();
        // return view('room.index', compact('rooms'));
        $rooms = Room::all();
        $users = User::all();
        return view('room.index', compact('rooms','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'size' => 'required|in:small,medium,large',
            'user_id' => 'required|exists:users,id'
        ]);

        $input['room_number'] = 'Ruangan'.' '.random_int(100,9999);
        $input['room_name'] = $request->room_name;
        // $room->update(['room_number' => 'Ruangan ' . $room->id]);
        $room = new Room;
        $room->fill($input);
        $room->save();

        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $ruangan = Ruangan::find($id);
        // $barang = Barang::where('id_ruangan', $id)->get()->all();
        // return view('ruangan.detail', compact('ruangan', 'barang'));
        $room = Room::find($id);
        return view('room.detail', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::find($id);
        $user = User::all();
        return view('room.edit', compact('room','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);
        $data = $request->all();
        $room->update($data);
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('room.index');
    }
}
