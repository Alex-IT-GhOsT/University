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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLectionRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
