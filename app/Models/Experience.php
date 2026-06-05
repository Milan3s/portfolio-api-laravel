<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'experiences';

    /**
     * Campos asignables
     */
    protected $fillable = [
        'user_id',
        'company',
        'position',
        'description',
        'details',
        'icon',
        'color',
        'start_date',
        'end_date',
        'currently_working',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'currently_working' => 'boolean',
    ];

    /**
     * Relación con usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
