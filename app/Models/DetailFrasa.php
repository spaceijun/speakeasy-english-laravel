<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class DetailFrasa
 *
 * @property $id
 * @property $frasa_id
 * @property $english
 * @property $indonesian
 * @property $created_at
 * @property $updated_at
 *
 * @property Frasa $frasa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailFrasa extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['frasa_id', 'english', 'indonesian'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function frasa()
    {
        return $this->belongsTo(\App\Models\Frasa::class, 'frasa_id', 'id');
    }
}
