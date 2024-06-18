<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'progid',
        'progfullname',
        'progshortname',
        'progcollid',
        'progcolldeptid'
    ];
    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
