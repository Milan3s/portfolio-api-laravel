<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    /**
     * Table
     */
    protected $table = 'education';

    /**
     * Primary Key
     */
    protected $primaryKey = 'id';

    /**
     * Fillable
     */
    protected $fillable = [
        'user_id',

        /**
         * Main Information
         */
        'title',
        'subtitle',
        'institution',
        'location',

        /**
         * Academic Information
         */
        'education_level',
        'plan',
        'start_year',
        'end_year',
        'status',
        'fct_status',
        'project_grade',

        /**
         * Certificate Information
         */
        'certificate_type',
        'provider',

        /**
         * Modules
         */
        'modules',

        /**
         * Visual
         */
        'icon',
        'color',

        /**
         * Type
         */
        'type',

        /**
         * Sorting
         */
        'order_index',

        /**
         * Visibility
         */
        'is_visible',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'user_id' => 'integer',

        'order_index' => 'integer',

        'is_visible' => 'boolean',

        'modules' => 'array',
    ];

    /**
     * Relación con usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
