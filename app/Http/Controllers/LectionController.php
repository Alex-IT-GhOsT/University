<?php

namespace App\Http\Controllers;

use App\Contracts\Services\LectionServiceInterface;
use App\Http\Requests\StoreLectionRequest;
use App\Http\Requests\UpdateLectionRequest;

class LectionController extends Controller
{
    public function __construct(
        private LectionServiceInterface $lectionService
    ){}
    public function index()
    {
        return response()->json($this->lectionService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLectionRequest $request)
    {
        $lection = $this->lectionService->create($request->validated());
        return response()->json($lection);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lection = $this->lectionService->getLectionById($id);
        return response()->json($lection);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLectionRequest $request, string $id)
    {
        $lection = $this->lectionService->update($id, $request->validated());
        return response()->json($lection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->lectionService->delete($id);
    }
}
