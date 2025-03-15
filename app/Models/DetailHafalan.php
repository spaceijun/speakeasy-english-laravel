<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailHafalan
 *
 * @property $id
 * @property $hafalan_id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Hafalan $hafalan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailHafalan extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'detail_hafalan';
    protected $fillable = ['hafalan_id', 'name', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hafalan()
    {
        return $this->belongsTo(\App\Models\Hafalan::class, 'hafalan_id', 'id');
    }
}
