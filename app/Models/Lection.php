<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lection extends Model
{
    use HasFactory;

    protected $table = 'lections';
    protected $fillable = ['name', 'description'];

    public function classRooms(): BelongsToMany
    {
        return $this->belongsToMany(ClassRoom::class, 'class_lection', 'lecture_id', 'class_room_id');
    }
}
