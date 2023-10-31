<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImportsProduct extends Model
{
    use HasFactory;

    protected $casts = [
        'category_id' => CategoryProduct::class,
        'entry_date' => 'dateTime',
        'quantity' => 'int',
        'expiration_date' => 'dateTime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}
