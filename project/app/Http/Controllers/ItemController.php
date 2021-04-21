<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function show(Item $item)
    {
        return response($item, 200);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response($item, 200);
    }

    public function update(Request $request, Item $item)
    {
        $item = $item->update($request->all());
        return response(['message' => 'ok'], 200);
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return response(null, 204);
    }
}
