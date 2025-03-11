<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Resources\AssignmentResource;
use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return AssignmentResource::collection(Assignment::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $assignment = new Assignment();
        $assignment ->name = $request ->name;
        $assignment ->save();

        return response()->json([
            'message'=> 'Assignment succesfully created',
            'data' => $assignment
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
//        $assignmentCategories = Assignment::with('categories.signs')->find($assignment);
//        // In plaats van een new resource toevoegen moet je een collection methode gebruiken omdat
//        // je anders problemen krijgt net kolommen.
//        return  AssignmentResource::collection($assignmentCategories);
        return new AssignmentResource($assignment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $assignment->update($validated);

        return response()->json([
            'message'=> 'Assignment succesfully edited',
            'data' => $assignment
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return response()->json([
            'message' => 'Assignment successfully deleted'
        ]);
    }
}
