<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ClassRoomServiceInterface;
use App\Http\Requests\StoreClassRoomRequest;
use App\Http\Requests\UpdateClassRoomRequest;

class ClassRoomController extends Controller
{
    public function __construct(
        private ClassRoomServiceInterface $classRoomService
    )
    {}
    public function index()
    {
        return response()->json($this->classRoomService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassRoomRequest $request)
    {
        $classRoom = $this->classRoomService->createClassRoom($request->validated());
        return response()->json($classRoom);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classRoom = $this->classRoomService->getClassRoomById((int) $id);
        return response()->json($classRoom);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassRoomRequest $request, string $id)
    {
        $classRoom = $this->classRoomService->updateClassRoom((int) $id,$request->validated());
        return response()->json($classRoom);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $success = $this->classRoomService->deleteClassRoom((int) $id);
        return response()->json(['success' => $success]);
    }
}
