<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeroHighlight extends Model
{
    /**
     * Tabla asociada.
     */
    protected $table = 'hero_highlights';

    /**
     * Campos asignables masivamente.
     */
    protected $fillable = [

        'hero_id',

        'title',

        'description',

        'icon',

        'order_index'
    ];

    /**
     * Conversión de tipos.
     */
    protected $casts = [

        'hero_id' => 'integer',

        'order_index' => 'integer'
    ];

    /**
     * Relación highlight -> hero
     */
    public function hero(): BelongsTo
    {
        return $this->belongsTo(Hero::class);
    }
}
