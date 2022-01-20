<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items.items', ['items' => Item::all()->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('login');
        }
        return view('items.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'item' => 'required',
            'description' => 'required',
            'price' => 'required:numeric',
            'balance' => 'required|numeric',
            'category' => 'required',
        ]);
        $item = new Item();
        $item->item = $request->item;
        $item->description  = $request->description;
        $item->price        = $request->price;
        $item->balance      = $request->balance;
        $item->category     = $request->category;
        $item->save();
        return back()->with('message', 'Item added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        return view('items.edit', ['item' => Item::find($id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'item' => 'required',
            'description' => 'required',
            'price' => 'required:numeric',
            'balance' => 'required|numeric',
            'category' => 'required',
        ]);
        $item = Item::find($id);
        $item->item = $request->item;
        $item->description  = $request->description;
        $item->price        = $request->price;
        $item->balance      = $request->balance;
        $item->category     = $request->category;
        $item->save();
        return redirect('items/'.$id.'/edit')->with('message', 'Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('items');
    }
}
