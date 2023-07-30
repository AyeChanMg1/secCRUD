<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [

            'posts' => Laptop::get(),

        ];

        return view('laptop.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required',
            'price' => 'required',
        ]);

        Laptop::create([
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),

        ]);
        return redirect()->route('laptop.index')->with('success', 'Successfully Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'name' => 'Showing detail of  ',
            'post' => Laptop::where('id', $id)->first(),
            
        ];
        return view('laptop.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'post' => Laptop::where('id', $id)->first(),
        ];
        return view('laptop.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Laptop::find($id);
        if($post) {

            $post->update([
                'brand' => $request->input('brand'),
                'price' => $request->input('price'),
            ]);
            return redirect()->route('laptop.index')->with('success', 'Successfully Updated');
        }
        return redirect()->route('laptop.index')->with('warning', 'Nothing to update!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Laptop::find($id);
        if($post) {

            $post->delete();
            return redirect()->route('laptop.index')->with('success', 'Successfully Deleted');
        }
        return redirect()->route('laptop.index')->with('warning', 'Nothing to delete!!');
    }
}
