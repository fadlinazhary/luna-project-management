<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    /**
     * Setting $fillable
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'due_date',
        'status',
        'priority',
    ];

    /**
     * Setting $guarded
     */
    protected $guarded = ['id'];

    public function startDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d F Y'),
        );
    }

    public function dueDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('d F Y'),
        );
    }

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucwords($value),
        );
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
