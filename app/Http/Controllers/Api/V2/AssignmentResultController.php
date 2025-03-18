<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\V2\Resources\AssignmentResource;
use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentResult;
use Illuminate\Http\Request;

class AssignmentResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            $response = response()->json([
                'message' => 'AssignmentResults successfully retrieved',
                'collection' => AssignmentResult::all() // Direct de collectie retourneren
            ], 200);

            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            return $response;
        }

        return response()->json([
            'message' => 'Method not allowed'
        ], 405);
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

        // 2. Controleer of er al een bestaand record is met dezelfde sign_id en user_id
        AssignmentResult::where('sign_id', $validatedData['sign_id'])
            ->where('user_id', $validatedData['user_id'])
            ->delete(); // Verwijdert het bestaande record als het bestaat

        // 3. Maak een nieuw AssignmentResult object en sla het op
        $assignmentResult = new AssignmentResult();
        $assignmentResult->sign_id = $validatedData['sign_id'];
        $assignmentResult->user_id = $validatedData['user_id'];
        $assignmentResult->is_correct = $validatedData['is_correct'];
        $assignmentResult->save();

        // 4. Geef een succesvolle response terug
        return response()->json([
            'message' => 'Assignment result successfully created (old entry replaced if existed)!',
            'data' => $assignmentResult,
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
