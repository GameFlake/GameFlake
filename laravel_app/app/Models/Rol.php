<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    /**
     * Return the roles of the user.
     */
    public function usuarios() {
        return $this->belongsToMany(Usuario::class, 'usuarioRol', 'idRol', 'idUsuario');
    }

    /**
     * Get role privileges.
     */
    public function permisos() {
        return $this->belongsToMany(Permiso::class, 'permisoRol', 'idRol', 'idPermiso');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rol';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idRol';

    public $timestamps = false;
}
