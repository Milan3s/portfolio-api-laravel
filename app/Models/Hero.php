<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Hero extends Model
{
    /**
     * Nombre de la tabla.
     */
    protected $table = 'hero';

    /**
     * Campos asignables masivamente.
     */
    protected $fillable = [

        'user_id',

        'greeting',

        'title',

        'subtitle',

        'description',

        'secondary_cta_text',

        'secondary_cta_link',

        'image_url',
    ];

    /**
     * Relación hero -> usuario.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación hero -> highlights.
     */
    public function highlights(): HasMany
    {
        return $this->hasMany(HeroHighlight::class);
    }
}
