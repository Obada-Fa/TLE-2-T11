<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\AssignmentResult;
use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $categories = Category::with('assignments.lessons')->get();
        $categories->map(function ($category){
            foreach ($category->assignments as $assignment){
                dd($assignment);
            }
        });
        dd($categories);

//        $lessons->map(function ($lesson) {
//            foreach ($lesson->assignments as $assignment) {
//                dump($assignment->categories);
//                foreach ($assignment->categories as $category) {
//                    dump($category->signs);
//                }
//            }
//        });

        $assignmentResult = AssignmentResult::with('signs')->get();
        dd($assignmentResult);

        return response()->json(['Message' => 'Version 2!', 'Message2' => 'Dit is versie 2!']);
    }
}
