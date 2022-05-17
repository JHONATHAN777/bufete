<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caso
 *
 * @property $id
 * @property $categoria_id
 * @property $abogado_id
 * @property $estado_id
 * @property $nombre_completo_del_cliente
 * @property $telefono
 * @property $documento_de_indetidad
 * @property $direccion
 * @property $expediente
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Abogado $abogado
 * @property Categoria $categoria
 * @property Estado $estado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caso extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'abogado_id' => 'required',
		'estado_id' => 'required',
		'nombre_completo_del_cliente' => 'required',
		'telefono' => 'required',
		'documento_de_indetidad' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','abogado_id','estado_id','nombre_completo_del_cliente','telefono','documento_de_indetidad','direccion','expediente','fecha_inicio','fecha_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function abogado()
    {
        return $this->hasOne('App\Abogado', 'id', 'abogado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'id', 'estado_id');
    }
    

}
