<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Resources\LessonCollection;
use App\Http\Controllers\Api\V1\Resources\LessonResource;
use App\Models\Lesson;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\isEmpty;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

//        // Dashboard portaal moet zichtbaar zijn
        // To do: LessonResource maken en LessonCollection hieraan toevoegen
        if ($request->isMethod('GET')) {
            $response = response()->json(new LessonCollection(Lesson::all()), 200);
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            return $response;

        } else {
            return response()->json([], 404);
        }


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


        if ($request->isMethod('POST')) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255'
            ]);
            $lesson = new Lesson();
            $lesson->name = $validatedData['name'];
            $lesson->save();

            $response = response()->json([
                'message' => 'Lesson successfully created',
                'data' => $lesson
            ], 201);

            $response->headers->set('Access-Control-Allow-Methods', ['POST', 'OPTIONS']);

            return $response;


        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson, Request $request)
    {

        if ($request->isMethod('GET')) {
            // haal de id op van de 1e les via postman
            $response = response()->json(
                [
                    'message' => 'Successfully retrieved the ID',
                    'data' => new LessonResource($lesson)
                ]
                , 200);

            $response->headers->set('Access-Control-Allow-Methods', ['GET', 'OPTIONS']);
            return $response;
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //

        if ($request->isMethod('PUT')) {
            $updatedData = $request->validate([
                'name' => 'required|string|max:255'
            ]);
            $lesson->name = $updatedData['name'];
            $lesson->save();
            //
            $response = response()->json(
                [
                    'message' => "Successfully edited",
                    'data' => $lesson

                ], 200);

            $response->headers->set('Access-Control-Allow-Methods', ['PUT', 'OPTIONS']);
            return $response;
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson, Request $request)
    {
        if ($request->isMethod('DELETE')) {
            $response = response()->json([
                'message' => "Resource succesfully deleted",
                $lesson->delete()], 204);
            return $response;
        }
    }
}
