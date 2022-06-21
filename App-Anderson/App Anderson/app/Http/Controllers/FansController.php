<?php

namespace App\Http\Controllers;

use App\Models\Fans;
use Illuminate\Http\Request;

class FansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fans = Fans::all();
        return view('fans.index', ['fans' => $fans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fans.add-fan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fans::create($request->all());

        return redirect()->route('fans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fans  $fans
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fan = Fans::where('id', $id)->first();
        return view('fans.show-fan', ['fan' => $fan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fans  $fans
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fan =  Fans::find($id);
        return view('fans.edit-fan', ['fan' => $fan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fans  $fans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fan = Fans::find($id);
        $fan->update($request->all());
        return view('fans.show-fan', ['fan' => $fan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fans  $fans
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fan = Fans::find($id);
        $fan->delete();
        return redirect(route('fans.index'));
    }
}
