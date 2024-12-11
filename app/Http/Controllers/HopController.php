<?php

namespace App\Http\Controllers;

use App\Models\Hop;
use Illuminate\Http\Request;

class HopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hops = Hop::all();        
        return view('backend.list_hop', ['hops' => $hops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ]);
        $hop = Hop::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'decimal' => $request->input('decimal')
        ]);
        
        // $hop = Hop::create($validatedData);
    
        return redirect()->route('list_hop');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hop  $hop
     * @return \Illuminate\Http\Response
     */
    public function show(Hop $hop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hop  $hop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hop = Hop::find($id);

        return view('backend.hop_edit', ['hop' => $hop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hop  $hop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $hop = Hop::find($id);
        
        $hop->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'decimal' => $request->input('decimal')
        ]);
    
        return redirect()->route('list_hop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hop  $hop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $hop = Hop::find($id);

        $hop->delete();
    
        return redirect()->route('list_hop');
    }
}
