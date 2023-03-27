<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Item;
use App\Models\admin\Tag;
use App\Models\Season;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {

        $items = Item::all();

        return view('admin.items.index', [
            'items' => $items,

        ]);
    }

    public function create()
    {
        $categories = Category::all()->pluck('title');
        $tags = Tag::all()->pluck('title');
        $seasons = Season::all()->pluck('title');

        return view('admin.items.create', ['categories' => $categories, 'tags' => $tags, 'seasons' => $seasons]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        Item::create($request->all());
        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $items = Item::find($id);
        return view('admin.items.edit', ['items' => $items]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $category = Item::find($id);
        $category->update($request->all());

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {

        Item::find($id)->delete();
        return redirect()->route('items.index');
    }
}
