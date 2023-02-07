<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $cliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mascota extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','cliente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'mascota_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    

}
