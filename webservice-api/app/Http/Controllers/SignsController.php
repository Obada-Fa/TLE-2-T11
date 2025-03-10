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
        // 1. Validatie van de verplichte velden
        $validatedData = $request->validate([
            '*.title' => 'required|string|max:255',
            '*.description' => 'required|string',
            '*.lesson_id' => 'required',
            '*.category_id' => 'required',
            '*.image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Optioneel, max 2MB
            '*.video' => 'nullable|file|mimes:mp4,avi,mkv|max:10000', // Optioneel, max 10MB
        ]);

        $signs = [];
        foreach ($validatedData as $data) {
            // 2. Verwerken van optionele velden (image & video)
            $imagePath = $request->hasFile('image')
                ? $request->file('image')->store('images', 'public')
                : null;

            $videoPath = $request->hasFile('video')
                ? $request->file('video')->store('videos', 'public')
                : null;


            $sign = new Sign();
            $sign->title = $data['title'];
            $sign->description = $data['description'];
            $sign->image = $imagePath;
            $sign->video = $videoPath;
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
