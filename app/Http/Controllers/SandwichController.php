<?php

namespace App\Http\Controllers;

use App\Models\Sandwich;
use App\Http\Requests\StoreSandwichRequest;
use App\Http\Requests\UpdateSandwichRequest;

class SandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSandwichRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sandwich $sandwich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sandwich $sandwich)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSandwichRequest $request, Sandwich $sandwich)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sandwich $sandwich)
    {
        //
    }
}
