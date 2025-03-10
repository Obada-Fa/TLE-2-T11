<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Resources\SignCollection;
use App\Http\Controllers\Api\V1\Resources\SignResource;
use App\Http\Controllers\Controller;
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
        // 1. Validatie van de verplichte velden
        $validatedData = $request->validate([
            '*.title' => 'required|string|max:255',
            '*.description' => 'required|string',
            '*.lesson_id' => 'required',
            '*.category_id' => 'required',
            '*.image' => 'nullable|string', // Geen bestand, maar een string (URL of pad)
            '*.video' => 'nullable|string', // Geen bestand, maar een string (URL of pad)
        ]);

        $signs = [];
        foreach ($validatedData as $data) {
            $sign = new Sign();
            $sign->title = $data['title'];
            $sign->description = $data['description'];
//            $sign->image = $data['image']; // Direct als string opslaan
            $sign->video = $data['video']; // Direct als string opslaan
            $sign->lesson_id = $data['lesson_id'];
            $sign->category_id = $data['category_id'];
            $sign->save();
            $signs[] = $sign;
        }

        return response()->json([
            'message' => 'Sign successfully created!',
            'data' => $signs,
        ], 201);
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
        $validated = $request->validate([
            'title' => 'required|string',
            'lesson_id' => 'required|exists:lessons,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        return Sign::create($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign $signs)
    {
        //
    }
}
