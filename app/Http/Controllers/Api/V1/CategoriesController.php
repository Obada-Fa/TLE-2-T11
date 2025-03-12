<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Resources\CategoryResource;
use App\Http\Controllers\Api\V1\Resources\CategorySignResource;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Bij de woordenboek pagina ga je ook alle categorieen nodig moeten hebben. Die roep je ook op.
        if ($request->isMethod('GET')) {
            $response = response()->json(CategorySignResource::collection(Category::all()), 200);
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            return $response;

        }
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
        $category = new Category();
        $category ->name = $request ->name;
        $category ->save();

        return response()->json([
            'message'=> 'Category succesfully created',
            'data' => $category
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, Request $request)
    {
        // Bij een enkele Category horen er ook andere signs. Deze signs moeten ook zichtbaar worden vanuit de backend?
        if ($request->isMethod('GET')) {
            $response = response()->json(
                [
                    'message' => 'Successfully retrieved the ID',
                    'data' => new CategorySignResource($category->load('signs'))
                ], 200);
            return $response;

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $category->update($validated);

        return response()->json([
            'message'=> 'Category succesfully edited',
            'data' => $category
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Category successfully deleted'
        ]);
    }

}
