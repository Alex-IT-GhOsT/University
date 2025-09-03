<?php

namespace App\Service;

use App\Contracts\Services\ClassRoomServiceInterface;
use App\Models\ClassRoom;
use App\Repositories\ClassRoomRepository;
use Illuminate\Database\Eloquent\Collection;

class ClassRoomService implements ClassRoomServiceInterface
{
    public function __construct(
        private ClassRoomRepository $classRoomRepository
    ){}
    public function getAll(): Collection
    {
        return $this->classRoomRepository->getAll();
    }

    public function getClassRoomById(int $id): ClassRoom
    {
        return $this->classRoomRepository->find($id);
    }

    public function getLectionsByClassId(int $classID): Collection
    {
        $classRoom = $this->classRoomRepository->find($classID);

        if (!$classRoom) {
            throw new \Exception("ClassRoom not found");
        }

        return $classRoom->lectures()->get();
    }

    public function createOrUpdateClassLections(int $classId, array $lections): Collection
    {
        $classRoom = $this->classRoomRepository->find($classId);
        if (!$classRoom) {
            throw new \Exception("ClassRoom not found");
        }
        $classRoom->lectures()->sync($lections);

        return $classRoom->lectures()->get();

    }

    public function createClassRoom(array $data): ClassRoom
    {
        return $this->classRoomRepository->create($data);
    }

    public function updateClassRoom(int $id, array $data): ClassRoom
    {
        $classRoom = $this->classRoomRepository->find($id);

        if (!$classRoom) {
            throw new \Exception("ClassRoom not found");
        }
        $classRoom->update($data);

        return $classRoom;
    }

    public function deleteClassRoom(int $id): bool
    {
        return $this->classRoomRepository->destroy($id);
    }
}
