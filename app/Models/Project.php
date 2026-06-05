<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    /**
     * Table
     */
    protected $table = 'projects';

    /**
     * Mass Assignment
     */
    protected $fillable = [

        'user_id',

        'title',

        'slug',

        'description',

        'icon',

        'type',

        'technologies',

        'github_url',

        'video_url',

        'status'
    ];

    /**
     * Relación proyecto -> usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
