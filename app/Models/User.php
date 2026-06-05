<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Database\Factories\UserFactory;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

use App\Models\Role;

use App\Models\Profile;

use App\Models\Home;

use App\Models\Hero;

use App\Models\SocialLink;

use App\Models\Project;

use App\Models\Service;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Campos asignables
     *
     * @var list<string>
     */
    protected $fillable = [

        'name',

        'email',

        'password',

        'role_id'
    ];

    /**
     * Campos ocultos
     *
     * @var list<string>
     */
    protected $hidden = [

        'password',

        'remember_token'
    ];

    /**
     * Casts automáticos
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [

            'email_verified_at' => 'datetime',

            'password' => 'hashed'
        ];
    }

    /**
     * Relación usuario -> rol
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relación usuario -> perfil
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Relación usuario -> home
     */
    public function home(): HasOne
    {
        return $this->hasOne(Home::class);
    }

    /**
     * Relación usuario -> hero
     */
    public function hero(): HasOne
    {
        return $this->hasOne(Hero::class);
    }

    /**
     * Relación usuario -> redes sociales
     */
    public function socialLinks(): HasMany
    {
        return $this->hasMany(SocialLink::class);
    }

    /**
     * Relación usuario -> proyectos
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Relación usuario -> servicios
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Total proyectos
     */
    public function getProjectsCountAttribute(): int
    {
        return $this->projects()
            ->count();
    }
}
