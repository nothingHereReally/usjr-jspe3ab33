<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'deptid',
        'deptfullname',
        'deptshortname',
        'deptcollid'
    ];
    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
