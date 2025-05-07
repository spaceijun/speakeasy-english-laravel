<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class TugasKosakata
 *
 * @property $id
 * @property $kosakatas_id
 * @property $kkm
 * @property $body_questions
 * @property $created_at
 * @property $updated_at
 *
 * @property Kosakata $kosakata
 * @property SpeakeasyEnglish.jawabanKosakata[] $speakeasyEnglish.jawabanKosakatas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TugasKosakata extends Model
{
    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['kosakatas_id', 'kkm', 'body_questions'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kosakata()
    {
        return $this->belongsTo(\App\Models\Kosakata::class, 'kosakatas_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabanKosakatas()
    {
        return $this->hasMany(\App\Models\jawabanKosakata::class, 'id', 'tugas_kosakatas_id');
    }
}
