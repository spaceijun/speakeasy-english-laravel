<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class TugasFrasa
 *
 * @property $id
 * @property $frasa_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property Frasa $frasa
 * @property SpeakeasyEnglish.jawabanFrasa[] $speakeasyEnglish.jawabanFrasas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasFrasa extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['frasa_id', 'kkm', 'body_questions'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function frasa()
    {
        return $this->belongsTo(\App\Models\Frasa::class, 'frasa_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanFrasas()
    {
        return $this->hasMany(\App\Models\jawabanFrasa::class, 'id', 'tugas_frasa_id');
    }
}
