<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestModelRequest;
use App\Http\Requests\UpdateTestModelRequest;
use App\Models\TestModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TestModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : JsonResponse
    {
        $data =$request->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:10',
        ]);

        $saved = TestModel::create($data);
        return response()->json($saved, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TestModel $testModel) : TestModel
    {
        return $testModel;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestModel $testModel): JsonResponse
    {
        $data =$request->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:10',
        ]);

        $saved = $testModel->update($data);
        return response()->json($saved, 200);
    }

    public function destroy(TestModel $testModel): \Illuminate\Http\JsonResponse
    {
        try {
            $testModel->delete();
            return response()->json(['message' => 'Resource successfully deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting resource'], 500);
        }
    }
}
