<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialLink extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'social_links';

    /**
     * Campos asignables
     */
    protected $fillable = [

        'user_id',

        'platform',

        'url',

        'icon',

        'order_index',

        'is_active'
    ];

    /**
     * Casts automáticos
     */
    protected $casts = [

        'is_active' => 'boolean'
    ];

    /**
     * Relación social link -> usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
