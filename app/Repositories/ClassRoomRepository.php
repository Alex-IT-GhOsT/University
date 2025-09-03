<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ClassRoomRepository implements BaseRepositoryInterface
{

    public function getAll(): Collection
    {
        return ClassRoom::all();
    }

    public function find(int $id): ?Model
    {
        return ClassRoom::find($id);
    }

    public function create(array $data): Model
    {
        return ClassRoom::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $classRoom = $this->find($id);
        return $classRoom ? $classRoom->update($data) : false;
    }

    public function destroy(int $id): bool
    {
        return ClassRoom::destroy($id) > 0;
    }
}
