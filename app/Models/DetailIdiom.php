<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class DetailIdiom
 *
 * @property $id
 * @property $idiom_id
 * @property $english
 * @property $indonesia
 * @property $created_at
 * @property $updated_at
 *
 * @property Idiom $idiom
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailIdiom extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idiom_id', 'english', 'indonesia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiom()
    {
        return $this->belongsTo(\App\Models\Idiom::class, 'idiom_id', 'id');
    }
}
