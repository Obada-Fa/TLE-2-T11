<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\V2\Resources\AssignmentResource;
use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;

class V2AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->isMethod('GET'))
            $response = response()->json(
                [
                    'message' => 'Collection successfully retrieved',
                    'collection' => AssignmentResource::collection(Assignment::all())
                ], 200);
        $response->headers->set('Access-Control-Allow-Methods', ['GET', 'OPTIONS']);
        return $response;
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
        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'name' => 'required|string|max:255'
            ]);
            $assignment = new Assignment();
            $assignment->name = $request->name;
            $assignment->save();

            $response = response()->json([
                'message' => 'Assignment succesfully created',
                'data' => $assignment
            ], 201);
            $response->headers->set('Access-Control-Allow-Methods', ['POST', 'OPTIONS']);
            return $response;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment, Request $request)
    {
        //
        if ($request->isMethod('GET')) {
            $response = response()->json(
                [
                    'message' => 'Successfully retrieved the single resource',
                    'data' => new AssignmentResource($assignment)
                ], 200);
//        $assignmentCategories = Assignment::with('categories.signs')->find($assignment);
//        // In plaats van een new resource toevoegen moet je een collection methode gebruiken omdat
//        // je anders problemen krijgt net kolommen.
//        return  AssignmentResource::collection($assignmentCategories);
            $response->headers->set('Access-Control-Allow-Methods', ['GET', 'OPTIONS']);
            return $response;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        if ($request->isMethod('PUT')) {
            $validated = $request->validate([
                'name' => 'required|string|max:255'
            ]);
            $assignment->update($validated);

            $response = response()->json([
                'message' => 'Assignment successfully edited',
                'data' => $assignment
            ], 200);
            $response->headers->set('Access-Control-Allow-Methods', ['PUT', 'OPTIONS']);
            return $response;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment, Request $request)
    {
        if ($request->isMethod('DELETE')) {

            $assignment->delete();
            $response = response()->json([
                'message' => 'Assignment successfully deleted',
            ],204);
            $response->headers->set('Access-Control-Allow-Methods', ['DELETE', 'OPTIONS']);
            return $response;
        }
    }
}
