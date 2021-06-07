<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    /**
     * Get roles with this privilege.
     */
    public function roles() {
        return $this->belongsToMany(Rol::class, 'permisoRol', 'idPermiso', 'idRol');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permiso';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idPermiso';

    public $timestamps = false;
}
