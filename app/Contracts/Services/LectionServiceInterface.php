<?php

namespace App\Contracts\Services;

use App\Models\Lection;
use Illuminate\Database\Eloquent\Collection;

interface LectionServiceInterface
{
    public function getAll(): Collection;
    public function getLectionById(int $id): Lection;
    public function create(array $data): Lection;
    public function update(int $id, array $data): Lection;
    public function delete(int $id): bool;
}
