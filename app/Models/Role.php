<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Campos asignables
     *
     * @var list<string>
     */
    protected $fillable = [

        'name',

        'slug',

        'description',

        'is_active'
    ];

    /**
     * Casts automáticos
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [

            'is_active' => 'boolean'
        ];
    }

    /**
     * Relación con usuarios
     */
    public function users()
    {
        return $this->hasMany(
            User::class,
            'role_id'
        );
    }
}
