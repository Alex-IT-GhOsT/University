<?php

namespace App\Repositories;

use App\Contracts\Repositories\LectionRepositoryInterface;
use App\Models\Lection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LectionRepositroy implements LectionRepositoryInterface
{

    public function getAll(): Collection
    {
        return Lection::all();
    }

    public function find(int $id): ?Model
    {
        return Lection::find($id);
    }

    public function create(array $data): Model
    {
        return Lection::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $lection = $this->find($id);
        return $lection ? $lection->update($data) : false;
    }

    public function destroy(int $id): bool
    {
        return Lection::destroy($id) > 0;
    }
}
