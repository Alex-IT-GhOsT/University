<?php

namespace App\Contracts\Services;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Collection;

interface ClassRoomServiceInterface
{
    public function getAll(): Collection;
    public function getClassRoomById(int $id): ClassRoom;
    public function getLectionsByClassId(int $classID): Collection;
    public function createOrUpdateClassLections(int $classId,array $lections): Collection;
    public function createClassRoom(array $data): ClassRoom;
    public function updateClassRoom(int $id, array $data): ClassRoom;
    public function deleteClassRoom(int $id): bool;

}
