<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JawabanFrasa
 *
 * @property $id
 * @property $user_id
 * @property $tugas_frasa_id
 * @property $body_answers
 * @property $nilai
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property TugasFrasa $tugasFrasa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class JawabanFrasa extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'tugas_frasa_id', 'body_answers', 'nilai', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tugasFrasa()
    {
        return $this->belongsTo(\App\Models\TugasFrasa::class, 'tugas_frasa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
