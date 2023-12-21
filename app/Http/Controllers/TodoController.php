<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => Todo::all(),
            'message' => "Success",
            'status' => 300
        ]);
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
        $todo = Todo::create([
            'task_name' => $request->task_name,
            'date' => $request->date,
            'is_done' => false,
            'created_at' => now(),
        ]);

        return response()->json([
            'data' => $todo,
            'message' => 'successfull',
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return response()->json([
            'data' => $todo,
            'message' => 'success',
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // return $todo->id;

       $updateData = Todo::find($todo->id)->update([
            'task_name' => $request->task_name,
            'date' => $request->date,
            'updated_at' => now()
        ]);

        return response()->json([
            'data' => $updateData,
            'message' => 'success',
            'status' => 220
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
