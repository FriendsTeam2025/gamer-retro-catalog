<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatalogItem extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'type',
        'platform_id',
        'manufacturer_id',
        'release_year',
        'region',
        'media_type',
        'barcode',
        'image_url',
        'description',
        'status',
        'is_retro_compatible',
        'retro_with',
        'console_type',
    ];

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }
} 