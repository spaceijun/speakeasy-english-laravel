<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriGrammar
 *
 * @property $id
 * @property $detailgram_id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailGrammar $detailGrammar
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MateriGrammar extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['detailgram_id', 'name', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detailGrammar()
    {
        return $this->belongsTo(\App\Models\DetailGrammar::class, 'detailgram_id', 'id');
    }
    
}
