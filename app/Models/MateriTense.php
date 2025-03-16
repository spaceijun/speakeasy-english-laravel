<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriTense
 *
 * @property $id
 * @property $detail_tenses_id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailTense $detailTense
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MateriTense extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['detail_tenses_id', 'name', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detailTense()
    {
        return $this->belongsTo(\App\Models\DetailTense::class, 'detail_tenses_id', 'id');
    }
    
}
