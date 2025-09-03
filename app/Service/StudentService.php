<?php

namespace App\Service;

use App\Contracts\Services\StudentServiceInterface;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Database\Eloquent\Collection;

class StudentService implements StudentServiceInterface
{

    public function __construct(
        private StudentRepository $studentRepository
    ){}

    public function getALl(): Collection
    {
        return $this->studentRepository->getAll();
    }

    public function getById(int $id): Student
    {
        return $this->studentRepository->find($id)->load(['classRoom', 'classRoom.lectures']);
    }

    public function create(array $data): Student
    {
        return $this->studentRepository->create($data);
    }

    public function update(int $id, array $data): Student
    {
        $this->studentRepository->update($id, $data);
        return $this->getById($id);
    }

    public function delete(int $id): bool
    {
        return $this->studentRepository->destroy($id);
    }
}
