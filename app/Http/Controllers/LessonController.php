<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    public function index()
    {
        return response()->json(Lesson::all(), 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $lesson = Lesson::create($request->all());

        return response()->json($lesson, 201);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return response()->json(['error' => 'Lesson not found'], 404);
        }

        return response()->json($lesson, 200);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $lesson->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json(['message' => 'Lesson updated successfully', 'lesson' => $lesson], 200);
    }


    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return response()->json(['error' => 'Lesson not found'], 404);
        }

        $lesson->delete();
        return response()->json(['message' => 'Lesson deleted'], 200);
    }
}
