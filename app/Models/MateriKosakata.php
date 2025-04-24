<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriKosakata
 *
 * @property $id
 * @property $kosakatas_id
 * @property $english
 * @property $indonesian
 * @property $created_at
 * @property $updated_at
 *
 * @property Kosakata $kosakata
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MateriKosakata extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['kosakatas_id', 'english', 'indonesian'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kosakata()
    {
        return $this->belongsTo(\App\Models\Kosakata::class, 'kosakatas_id', 'id');
    }
    
}
