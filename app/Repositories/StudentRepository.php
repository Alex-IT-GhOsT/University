<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use App\Contracts\Repositories\StudentRepositoryInterface;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAll(): Collection
    {
        return Student::all();
    }

    public function find(int $id): ?Model
    {
        return Student::find($id);
    }

    public function create(array $data): Model
    {
        return Student::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $student = Student::find($id);
        return $student ? $student->update($data) : false;
    }

    public function destroy(int $id): bool
    {
        return Student::destroy($id) > 0;
    }
}
