<?php

namespace App\Http\Controllers;

use App\Http\Resources\SignCollection;
use App\Http\Resources\SignResource;
use App\Models\Sign;
use Illuminate\Http\Request;

class SignsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Haal alle signs op. Doordat je de api oproept met de / route krijg je alle signs
            // Dit zou dan in de woordenboek interface moeten eindigen
        return new SignCollection(Sign::all());
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
    public function show(Sign $sign)
    {
        //
        return new SignResource($sign);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sign $signs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign $signs)
    {
        //
    }
}
