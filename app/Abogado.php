<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Abogado
 *
 * @property $id
 * @property $abogado
 * @property $telefono
 * @property $direccion
 * @property $documento_de_indentidad
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Caso[] $casos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Abogado extends Model
{
    
    static $rules = [
		'abogado' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'documento_de_indentidad' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['abogado','telefono','direccion','documento_de_indentidad','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function casos()
    {
        return $this->hasMany('App\Caso', 'abogado_id', 'id');
    }
    

}
