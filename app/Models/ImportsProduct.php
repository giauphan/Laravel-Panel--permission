<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImportsProduct extends Model
{
    protected $guarded = [];

    protected $casts = [
        'entry_date' => 'datetime',
        'quantity' => 'int',
        'expiration_date' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class, 'category_id');
    }
}
