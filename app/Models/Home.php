<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Home extends Model
{
    /**
     * Table
     */
    protected $table = 'home';

    /**
     * Mass Assignment
     */
    protected $fillable = [

        'user_id',

        'name',

        'full_name',

        'headline',

        'description',

        'badge_text',

        'years_experience',

        'is_active',

        'logo_url'
    ];

    /**
     * Casts
     */
    protected $casts = [

        'is_active' => 'boolean',

        'years_experience' => 'integer'
    ];

    /**
     * Appends
     */
    protected $appends = [

        'projects_completed'
    ];

    /**
     * Relación home -> usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Total proyectos del usuario
     */
    public function getProjectsCompletedAttribute(): int
    {
        if (!$this->relationLoaded('user')) {

            $this->load('user');
        }

        return $this->user
            ?->projects()
            ->count() ?? 0;
    }
}
