<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'status',
        'priority',
        'start_date',
        'due_date',
    ];

    protected $guarded = ['id', 'project_id'];

    public function startDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d F Y H:i:s'),
        );
    }

    public function dueDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d F Y H:i:s'),
        );
    }

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucwords($value),
        );
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
