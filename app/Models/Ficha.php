<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha
 *
 * @property $id
 * @property $nombre
 * @property $coordinacion
 * @property $f_inicio
 * @property $f_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendiz[] $aprendizs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ficha extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'coordinacion' => 'required',
		'f_inicio' => 'required',
		'f_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','coordinacion','f_inicio','f_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendiz()
    {
        return $this->hasMany('App\Models\Aprendiz', 'fichas_id', 'id');
    }
    

}
