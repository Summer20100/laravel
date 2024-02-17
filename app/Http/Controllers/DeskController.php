<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Desk::all();
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
        return Desk::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Desk $desk)
    {
        return $desk;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desk $desk)
    {
        return $desk;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desk $desk)
    {
        $desk->fill($request->all());
        $desk->save();
        return $desk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
        return Desk::all();
    }
}
