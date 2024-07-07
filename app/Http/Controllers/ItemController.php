<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        $rooms = Room::all();
        return view('item.index', compact('items', 'categories', 'rooms'));
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
            'image' => 'required',
        ]);

        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/item';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $name);
            $input['image'] = $name;
        }
        $input['item_number'] = 'Barang'.' '.random_int(100,9999);
        Item::create($input);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::findOrFail($id);
        return view('item.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        $category = Category::all();
        $room = Room::all();
        return view('item.edit', compact('item','category','room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $item = Item::findOrFail($id);
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/item';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $name);
            $data['image'] = $name;
        }
        $item->update($data);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index');
    }
}
