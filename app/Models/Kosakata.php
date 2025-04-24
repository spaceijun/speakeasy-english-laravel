<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class Kosakata
 *
 * @property $id
 * @property $category_id
 * @property $name
 * @property $images
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property English.materiKosakata[] $english.materiKosakatas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Kosakata extends Model
{

    use HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['category_id', 'name', 'images', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiKosakatas()
    {
        return $this->hasMany(\App\Models\materiKosakata::class, 'id', 'kosakatas_id');
    }
}
