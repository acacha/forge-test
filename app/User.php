<?php

namespace App;

use Acacha\Forge\Models\Traits\HasAssignments;
use Acacha\Forge\Models\Traits\HasCreatedAssignments;
use Acacha\Forge\Models\Traits\HasServers;
use Acacha\Groups\Models\Traits\HasGroups;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User.
 */
class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasRoles, HasServers, HasGroups, HasAssignments, HasCreatedAssignments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
