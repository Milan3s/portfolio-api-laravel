<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'contacts';

    /**
     * Campos asignables
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'subject',
        'message',
        'status',
        'hidden',
        'ip_address',
        'user_agent',
        'replied_at',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'hidden' => 'boolean',
        'replied_at' => 'datetime',
    ];

    /**
     * Relación con usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
