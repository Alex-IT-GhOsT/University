<?php

namespace App\Contracts\Services;

use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;

interface StudentServiceInterface
{
    public function getALl(): Collection;
    public function getById(int $id): Student;
    public function create(array $data): Student;
    public function update(int $id, array $data): Student;
    public function delete(int $id): bool;
}
