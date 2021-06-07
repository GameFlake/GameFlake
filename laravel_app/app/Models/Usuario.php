<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'password',
        'telefono',
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Return the roles of the user.
     */
    public function roles() {
        return $this->belongsToMany(Rol::class, 'usuarioRol', 'idUsuario', 'idRol');
    }

        /**
     * Get current user privileges.
     */
    public function getPermissions() {

        //return $this->roles[0]->permisos;

        $permissions = [];
        foreach($this->roles as $role) {
            $rolePermissions = $role->permisos->pluck('nombre')->toArray();
            array_push($permissions, $rolePermissions);
        }

        // Merge all privileges in a single array and remove duplicates
        return array_unique(array_merge(...$permissions));
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idUsuario';

    public $timestamps = false;
}