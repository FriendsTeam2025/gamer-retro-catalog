<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'developer_id',
        'publisher_id',
        'release_year',
        'platform_id',
        'region',
        'media_type',
        'edition',
        'modes',
        'languages',
        'has_fan_patch',
        'fan_patch_note',
        'barcode',
        'image_url',
        'description',
        'status',
    ];

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }
} 