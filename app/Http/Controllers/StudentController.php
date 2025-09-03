<?php

namespace App\Http\Controllers;

use App\Contracts\Services\StudentServiceInterface;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(
        private StudentServiceInterface $studentService
    ){}
    public function index()
    {
        return response()->json($this->studentService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = $this->studentService->create($request->validated());
        return response()->json($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = $this->studentService->getById($id);
        return response()->json($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        $student = $this->studentService->update($id, $request->validated());
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(['message' => 'Студент удален']);
    }
}
