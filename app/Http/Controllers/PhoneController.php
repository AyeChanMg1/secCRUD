<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [

            'posts' => Phone::get(),

        ];

        return view('phone.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone.create');
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

        Phone::create([
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),

        ]);
        return redirect()->route('phone.index')->with('success', 'Successfully Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'name' => 'Showing detail of  ',
            'post' => Phone::where('id', $id)->first(),
            
        ];
        // dd($data);
        return view('phone.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'post' => Phone::where('id', $id)->first(),
        ];
        return view('phone.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'brand' => 'required',
            'price' => 'required',
        ]);

        $post = Phone::find($id);
        if($post) {

            $post->update([
                'brand' => $request->input('brand'),
                'price' => $request->input('price'),
            ]);
            return redirect()->route('phone.index')->with('success', 'Successfully Updated');
        }
        return redirect()->route('phone.index')->with('warning', 'Nothing to update!!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Phone::find($id);
        if($post) {

            $post->delete();
            return redirect()->route('phone.index')->with('success', 'Successfully Deleted');
        }
        return redirect()->route('phone.index')->with('warning', 'Nothing to delete!!');
    }
}
