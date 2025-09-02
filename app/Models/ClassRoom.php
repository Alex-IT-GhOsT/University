<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table = 'class_rooms';
    protected $fillable = ['name'];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_room_id');
    }

    public function lectures(): BelongsToMany
    {
        return $this->belongsToMany(Lection::class, 'class_lection', 'class_room_id', 'lecture_id');
    }
}
