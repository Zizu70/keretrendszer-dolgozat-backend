<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sandwich;
use Illuminate\Http\Request;
use Laravel\Sanctum\Sanctum;

class SandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sandwich = Sandwich::all();
        return $sandwich;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sandwich = Sandwich::create($request->all());
        return $sandwich;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)) {
            return response()->json(["message" => "Nincs elem az alábbi azonosítóval: $id"], 404);
        }
        return $sandwich;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)) {
            return response()->json(["message" => "Nincs elem az alábbi azonosítóval: $id"], 404);
        }
        $sandwich->fill($request->all());
        $sandwich->save();
        return $sandwich;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sandwich = Sandwich::find($id);
        if (is_null($sandwich)) {
            return response()->json(["message" => "Nincs elem az alábbi azonosítóval: $id"], 404);
        }
        $sandwich->delete();
        return response()->noContent();
    }
}
