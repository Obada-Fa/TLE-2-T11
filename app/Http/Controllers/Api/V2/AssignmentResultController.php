<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\AssignmentResult;
use App\Models\Sign;
use Illuminate\Http\Request;

class AssignmentResultController extends Controller
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
    public function store(Request $request)
    {
        // 1. Validatie van de verplichte velden
        $validatedData = $request->validate([
            'sign_id' => 'required',
            'user_id' => 'required',
            'is_correct' => 'required|boolean',
        ]);

        // 2. Maak een nieuw AssignmentResult object en sla het op
        $assignmentResult = new AssignmentResult();
        $assignmentResult->sign_id = $validatedData['sign_id'];
        $assignmentResult->user_id = $validatedData['user_id'];
        $assignmentResult->is_correct = $validatedData['is_correct'];
        $assignmentResult->save();

        // 3. Geef een succesvolle response terug
        return response()->json([
            'message' => 'Assignment result successfully created!',
            'data' => $assignmentResult,  // Retourneer het opgeslagen object, niet de gevalidede data
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
