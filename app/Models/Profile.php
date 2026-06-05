<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'profiles';

    /**
     * Campos asignables
     */
    protected $fillable = [

        'user_id',

        'full_name',

        'title',

        'bio',

        'avatar_url',

        'available_for_work'
    ];

    /**
     * Casts automáticos
     */
    protected $casts = [

        'available_for_work' => 'boolean'
    ];

    /**
     * Relación perfil -> usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
