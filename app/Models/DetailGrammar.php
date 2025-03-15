<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailGrammar
 *
 * @property $id
 * @property $grammars_id
 * @property $name
 * @property $images
 * @property $created_at
 * @property $updated_at
 *
 * @property Grammar $grammar
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailGrammar extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['grammars_id', 'name', 'images'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grammar()
    {
        return $this->belongsTo(\App\Models\Grammar::class, 'grammars_id', 'id');
    }
    
}
