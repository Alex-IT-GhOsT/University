<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

interface BaseRepositoryInterface
{
    public function getAll(): Collection;
    public function find(int $id): ?Model;
    public function create(array $data): Model;
    public function update(int $id, array $data): bool;
    public function destroy(int $id): bool;
}
