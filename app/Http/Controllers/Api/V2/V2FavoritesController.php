<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Sign;
use Illuminate\Support\Facades\Auth;


class V2FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorites = Auth::user()->favorites()->with('sign')->get();
        return response()->json($favorites);
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
        $request->validate([
            'sign_id' => 'required|exists:signs,id'
        ]);
        $user = auth()->user();

        if ($user->favorites()->where('sign_id', $request->sign_id)->exists()) {
            return response()->json(['error' => 'Sign is already in your favorites'],409);
        }
        Favorite::create([
            'user_id' => $user->id,
            'sign_id' =>$request->sign_id,
        ]);
        return response()->json(['success' => 'Sign added to favorites'], 201);
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
    public function destroy($sign_id)
    {
        $favorite = Favorite::where('sign_id', $sign_id)
            ->where('user_id', auth()->id())
            ->first();

        if (!$favorite) {
            return response()->json(['error' => 'Favorite not found'], 404);
        }

        $favorite->delete();
        return response()->json(['success' => 'Favorite deleted'], 200);
    }

}
