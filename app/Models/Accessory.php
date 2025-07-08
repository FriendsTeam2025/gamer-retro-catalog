<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Accessory extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'manufacturer_id',
        'release_year',
        'region',
        'accessory_type',
        'connectivity',
        'is_official',
        'official_note',
        'barcode',
        'image_url',
        'description',
        'status',
    ];

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }
} 