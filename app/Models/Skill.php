<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class Skill extends Model
{
    /**
     * Table
     */
    protected $table = 'skills';

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
        'name',
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
