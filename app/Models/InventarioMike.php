<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventarioMike
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $cantidad
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InventarioMike extends Model
{
   // rename table
   protected $table = 'inventario_mike';

    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','cantidad','precio'];



}
