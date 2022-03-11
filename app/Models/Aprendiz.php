<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendiz
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Direccion
 * @property $correo
 * @property $telefono
 * @property $fichas_id
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @property Ficha $ficha
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendiz extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Direccion' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
		'fichas_id' => 'required',
		'edad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Direccion','correo','telefono','fichas_id','edad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ficha()
    {
        return $this->hasOne('App\Models\Ficha', 'id', 'fichas_id');
    }
    

}
