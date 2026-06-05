<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'services';

    /**
     * Primary Key
     */
    protected $primaryKey = 'id';

    /**
     * Timestamps
     */
    public $timestamps = false;

    /**
     * Mass Assignment
     */
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'icon',
        'description',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'user_id' => 'integer',
    ];

    /**
     * Relationships
     */

    /**
     * User owner
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
