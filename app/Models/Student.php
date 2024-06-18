<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studid',
        'studfirstname',
        'studlastname',
        'studmidname',
        'studprogid',
        'studcollid',
        'studyear'
    ];
    public function college(): BelongsTo
    {
        return $this->belongsTo(College::class);
    }
}
