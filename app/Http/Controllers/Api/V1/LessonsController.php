<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Resources\LessonCollection;
use App\Http\Controllers\Api\V1\Resources\LessonResource;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Dashboard portaal moet zichtbaar zijn
        // To do: LessonResource maken en LessonColection hieraan toevoegen
        return new LessonCollection(Lesson::all());


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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $lesson = new Lesson();
        $lesson->name = $request->name;
        $lesson->save();

        return response()->json([
            'message'=> 'Lesson succesfully created',
            'data' => $lesson
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        // haal de id op van de 1e les via postman
        return new LessonResource($lesson);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
