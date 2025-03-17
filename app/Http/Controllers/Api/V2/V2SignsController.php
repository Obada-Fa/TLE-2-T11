<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\V2\Resources\SignCollection;
use App\Http\Controllers\Api\V2\Resources\SignResource;
use App\Http\Controllers\Controller;
use App\Models\Sign;
use Illuminate\Http\Request;

class V2SignsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->isMethod('GET'))
            $response = response()->json(
                [
                    'message' => 'Collection successfully retrieved',
                    'collection' => new SignCollection(Sign::all())
                ], 200);
        $response->headers->set('Access-Control-Allow-Methods', ['GET', 'OPTIONS']);
        return $response;
        // Haal alle signs op. Doordat je de api oproept met de / route krijg je alle signs
        // Dit zou dan in de woordenboek interface moeten eindigen
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            // 1. Validatie van de verplichte velden
            $validatedData = $request->validate([
                '*.title' => 'required|string|max:255',
                '*.description' => 'required|string',
                '*.category_id' => 'required',
                '*.image' => 'nullable',
                '*.video' => 'nullable|string',
            ]);


            $signs = [];
            foreach ($validatedData as $data) {
                $sign = new Sign();
                $sign->title = $data['title'];
                $sign->description = $data['description'];
                $sign->image = $data['image'] ?? "";
                $sign->video = $data['video'];
                $sign->category_id = $data['category_id'];
                $sign->save();
                $signs[] = $sign;
            }
            $response = response()->json([
                'message' => 'Sign successfully created!',
                'data' => $signs,
            ], 201);
            $response->headers->set('Access-Control-Allow-Methods', ['POST', 'OPTIONS']);

            return $response;
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Sign $sign, Request $request)
    {
        if ($request->isMethod('GET')) {
            $response = response()->json(
                [
                    'message' => 'Successfully retrieved the single resource',
                    'data' => new SignResource($sign)
                ], 200);
            $response->headers->set('Access-Control-Allow-Methods', ['GET', 'OPTIONS']);
            return $response;
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, Sign $sign)
    {
        if ($request->isMethod('PUT')) {
            $validated = $request->validate([
                'title' => 'required|string',
                'lesson_id' => 'required|exists:lessons,id',
                'category_id' => 'required|exists:categories,id',
                'description' => 'nullable|string',
            ]);
            $sign->update($validated);
            $response = response()->json(
                [
                    'message' => 'Sign successfully edited',
                    'data' => $sign
                    ,
                ], 200);
            $response->headers->set('Access-Control-Allow-Methods', ['PUT', 'OPTIONS']);
            return $response;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(Request $request, Sign $sign)
    {
        //
        if ($request->isMethod('DELETE')) {
            $response = response()->json([
                'message' => 'Sign successfully deleted',
                $sign->delete()
            ], 204);
            $response->headers->set('Access-Control-Allow-Methods', ['DELETE', 'OPTIONS']);
            return $response;
        }
    }
}
