<?php

namespace App\Http\Controllers;

use App\Models\NhaCC;
use Illuminate\Http\Request;

class NhaCCcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $db = NhaCC::all();
        return view('Admin.NhaCungCap.index',['ncc'=>$db]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NhaCC $nhaCC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NhaCC $nhaCC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NhaCC $nhaCC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NhaCC $nhaCC)
    {
        //
    }
}
