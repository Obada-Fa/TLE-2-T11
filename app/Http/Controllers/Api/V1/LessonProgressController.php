<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LessonProgress;

class LessonProgressController extends Controller
{
    // Mark a lesson as completed
    public function completeLesson(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', // ❗ Include user_id since auth is disabled
            'lesson_id' => 'required|exists:lessons,id',
            'completed' => 'required|boolean'
        ]);

        $progress = LessonProgress::updateOrCreate(
            ['user_id' => $request->user_id, 'lesson_id' => $request->lesson_id],
            ['completed' => $request->completed]
        );

        return response()->json([
            'message' => 'Lesson updated',
            'progress' => $progress
        ], 200);
    }


    // Get user progress
    public function getUserProgress(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $progress = LessonProgress::where('user_id', $request->user_id)->get();

        return response()->json($progress, 200);
    }

}
