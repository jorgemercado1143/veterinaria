<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $fecha
 * @property $hora
 * @property $mascota_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Mascota $mascota
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'hora' => 'required',
		'mascota_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','hora','mascota_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mascota()
    {
        return $this->hasOne('App\Models\Mascota', 'id', 'mascota_id');
    }
    

}
