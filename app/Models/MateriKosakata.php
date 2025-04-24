<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

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
    use HasApiTokens;

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
