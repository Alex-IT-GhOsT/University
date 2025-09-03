<?php

namespace App\Service;

use App\Contracts\Repositories\LectionRepositoryInterface;
use App\Contracts\Services\LectionServiceInterface;
use App\Models\Lection;
use Illuminate\Database\Eloquent\Collection;

class LectionService implements LectionServiceInterface
{
    public function __construct(
        private LectionRepositoryInterface $lectionRepository
    ){}
    public function getAll(): Collection
    {
        return $this->lectionRepository->getAll();
    }

    public function getLectionById(int $id): Lection
    {
        $lection = $this->lectionRepository->find($id);

        if(!$lection) {
            throw new \Exception("Lection not found");
        }

        return $lection;
    }

    public function create(array $data): Lection
    {
        return $this->lectionRepository->create($data);
    }

    public function update(int $id, array $data): Lection
    {
        $lection = $this->getLectionById($id);
        $lection->update($data);
        return $lection;
    }

    public function delete(int $id): bool
    {
        return $this->lectionRepository->destroy($id);
    }
}
