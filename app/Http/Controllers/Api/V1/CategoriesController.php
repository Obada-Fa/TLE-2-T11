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
    public function index()
    {
        // Bij de woordenboek pagina ga je ook alle categorieen nodig moeten hebben. Die roep je ook op.
        return  CategorySignResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        // Bij een enkele Category horen er ook andere signs. Deze signs moeten ook zichtbaar worden vanuit de backend?
        return new CategorySignResource($category->load('signs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categories)
    {
        //
    }
}
