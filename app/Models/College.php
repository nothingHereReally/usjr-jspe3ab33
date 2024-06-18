<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'collid',
        'collfullname',
        'collshortname'
    ];
    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
